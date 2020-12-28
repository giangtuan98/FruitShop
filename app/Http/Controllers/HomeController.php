<?php

namespace App\Http\Controllers;

use App\Http\Requests\CheckoutRequest;
use App\Mail\OrderSuccessMail;
use App\Models\Order;
use App\Models\Product;
use App\Repositories\Contracts\OrderRepositoryInterface;
use App\Repositories\Contracts\ProductRepositoryInterface;
use App\Repositories\Eloquents\CategoryRepository;
use App\Services\CartService;
use App\Traits\SortTrait;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    use SortTrait;

    private $productRepository;
    private $categoryRepository;
    private $orderRepository;
    private $cartService;

    public function __construct(
        ProductRepositoryInterface $productRepository,
        CategoryRepository $categoryRepository,
        OrderRepositoryInterface $orderRepository,
        CartService $cartService
    ) {
        $this->productRepository = $productRepository;
        $this->categoryRepository = $categoryRepository;
        $this->orderRepository = $orderRepository;
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
        $q = $request->get('q') ?? '';
        $conn = Product::select('*');
        $page = $q  == '' ? 'shop.index' : 'search.index';
        if (strlen($q) > 3) {
            $conn->search($q);
        } else {
            $conn->where('name', 'like', "%{$q}%");
        }

        $products = $conn
            ->selectRaw('IF(promotion_start_date <= promotion_end_date AND promotion_end_date >= CURDATE(), true, false) as sale_flg')
            ->selectRaw('IF(promotion_start_date <= promotion_end_date AND promotion_end_date >= CURDATE(), promotion_price, unit_price) as price')
            ->inStock()
            ->sortByType($orderType)
            ->orderBy('id')
            ->with('category')
            ->paginate(16);
        // $items = $this->sortProductByOrderType(collect($products->items()), $orderType);

        // $products = new LengthAwarePaginator($items, $products->total(), $products->perPage(), $products->currentPage(), [
        //     'path' => $request->url(),
        //     'query' => [
        //         'page' => $products->currentPage()
        //     ]
        // ]);

        return view($page, [
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
        $customer = $request->all([
            'name',
            'phone',
            'email',
            'address',
        ]);
        if (!session()->has('cart')) {
            return view('checkout.nothing');
        }

        $cart = $this->cartService->updateCart(session('cart', null));
        $orderDetail = [];
        foreach ($cart['items'] as $item) {
            $orderDetail[] = [
                'product_id' => $item['item']->id,
                'quantity' => $item['quantity'],
                'unit_price' => $item['item']->unit_price,
            ];
        }

        // try {
        DB::beginTransaction();

        $order = Order::create([
            'customer_info' => json_encode($customer),
            'code' => Order::getRandomUniqueCode(),
            'total' => $cart['total']
        ]);
        $order->orderDetails()->createMany($orderDetail);

        DB::commit();
        Mail::to('giangtuan6199@gmail.com')->send(new OrderSuccessMail(['cart' => $cart, 'customer' => $customer, 'code' => $order->code]));
        session()->forget('cart');


        return view('checkout.success', [
            'order' => $order
        ]);
        // } catch (\Throwable $th) {
        //     DB::rollBack();
        // }

        return view('checkout.fail');
    }
}
