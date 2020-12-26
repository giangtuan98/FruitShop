<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Repositories\Contracts\ProductRepositoryInterface;
use App\Repositories\Eloquents\CategoryRepository;
use App\Traits\SortTrait;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class HomeController extends Controller
{
    use SortTrait;

    private $productRepository;
    private $categoryRepository;

    public function __construct(
        ProductRepositoryInterface $productRepository,
        CategoryRepository $categoryRepository
    ) {
        $this->productRepository = $productRepository;
        $this->categoryRepository = $categoryRepository;
    }

    public function index()
    {
        $products = Product::inStock()->inRandomOrder()->limit('8')->with('category')->get();
        $hotProducts = $this->productRepository->hotProduct();
        $comingProducts = $this->productRepository->comingProduct();
        // dd($comingProducts);

        return view('home.index', [
            'products' => $products,
            'hotProducts' => $hotProducts,
            'comingProducts' => $comingProducts,
        ]);
    }

    public function shop(Request $request)
    {
        $orderType = $request->get('orderType');
        // dd($sortOrder);
        //
        $products = Product::select('*')
            ->selectRaw('IF(promotion_start_date <= promotion_end_date AND promotion_end_date >= CURDATE(), true, false) as sale_flg')
            ->selectRaw('IF(promotion_start_date <= promotion_end_date AND promotion_end_date >= CURDATE(), promotion_price, unit_price) as price')
            ->inStock()
            ->sortByType($orderType)
            ->orderBy('id')
            ->with('category')
            ->paginate(16);
        $items = $this->sortProductByOrderType(collect($products->items()), $orderType);

        $products = new LengthAwarePaginator($items, $products->total(), $products->perPage(), $products->currentPage(), [
            'path' => $request->url(),
            'query' => [
                'page' => $products->currentPage()
            ]
        ]);

        return view('shop.index', [
            'products' => $products->appends(request()->input())
        ]);
    }

    public function about()
    {
        return view('about.index');
    }

    public function cart()
    {

        return view('cart.index');
    }
}
