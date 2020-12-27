<?php

namespace App\Http\Controllers;

use App\Http\Requests\CheckoutRequest;
use App\Models\Product;
use App\Repositories\Contracts\ProductRepositoryInterface;
use App\Repositories\Eloquents\CategoryRepository;
use App\Services\CartService;
use App\Traits\SortTrait;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    use SortTrait;

    private $productRepository;
    private $categoryRepository;
    private $cartService;

    public function __construct(
        ProductRepositoryInterface $productRepository,
        CategoryRepository $categoryRepository,
        CartService $cartService
    ) {
        $this->productRepository = $productRepository;
        $this->categoryRepository = $categoryRepository;
        $this->cartService = $cartService;
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
        // session()->put('cart', [
        //     'items' => [],
        //     'quantity' => 0,
        //     'total' => 0
        // ]);
        // dd(session('cart'));

        return view('cart.index');
    }

    public function getCheckout()
    {
        $cart = session('cart', null);

        if (!$cart || $cart['quantity'] == 0) {
            return view('checkout.nothing');
        }

        $cart = $this->cartService->updateCart($cart);

        return view('checkout.index', [
            'cart' => $cart
        ]);
    }

    public function checkout(CheckoutRequest $request)
    {
        $data = $request->all([
            'name',
            'phone',
            'email',
            'address',
        ]);

        $cart = $this->cartService->updateCart(session('cart', null));

        DB::transaction(function () use ($cart){

        })

        dd($data);
    }
}
