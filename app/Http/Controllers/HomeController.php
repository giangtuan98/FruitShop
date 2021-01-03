<?php

namespace App\Http\Controllers;

use App\Http\Requests\CheckoutRequest;
use App\Mail\NewProductNotify;
use App\Mail\OrderSuccessMail;
use App\Mail\Question;
use App\Models\Order;
use App\Models\Product;
use App\Models\Subscriber;
use App\Repositories\Contracts\OrderRepositoryInterface;
use App\Repositories\Contracts\ProductRepositoryInterface;
use App\Repositories\Eloquents\CategoryRepository;
use App\Services\CartService;
use App\Traits\SortTrait;
use Illuminate\Database\Eloquent\ModelNotFoundException;
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
        $dealOfTheDay = Product::isSale()->inStock()->inRandomOrder()->take('3')->get();
        // dd($comingProducts);

        return view('home.index', [
            'products' => $products,
            'hotProducts' => $hotProducts,
            'comingProducts' => $comingProducts,
            'dealOfTheDay' => $dealOfTheDay
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
        if ($cart['quantity'] <= 0) {
            return view('checkout.nothing');
        }


        try {
            DB::beginTransaction();

            $orderDetail = [];
            foreach ($cart['items'] as $item) {
                $orderDetail[] = [
                    'product_id' => $item['item']->id,
                    'quantity' => $item['quantity'],
                    'unit_price' => $item['item']->unit_price,
                ];

                if ($item['quantity'] == 0) {
                    throw new ModelNotFoundException();
                }

                $item['item']->quantity = $item['item']->quantity - $item['quantity'];
                $item['item']->is_coming_soon = $item['item']->quantity == 0;
                unset($item['item']->price);
                $item['item']->save();
            }

            $order = Order::create([
                'customer_info' => $customer,
                'code' => Order::getRandomUniqueCode(),
                'total' => $cart['total']
            ]);
            $order->orderDetails()->createMany($orderDetail);


            DB::commit();
            Mail::to($customer['email'])->send(new OrderSuccessMail(['cart' => $cart, 'customer' => $customer, 'code' => $order->code]));
            session()->forget('cart');


            return view('checkout.success', [
                'order' => $order
            ]);
        } catch (\Throwable $th) {
            DB::rollBack();
        }

        return view('checkout.fail');
    }

    public function contact()
    {
        return view('contacts.index');
    }

    public function subscribe(Request $request)
    {
        $email = $request->email;
        $check = Subscriber::where('email', $email)->count();

        if ($check > 0) {
            return response([
                'msg' => 'This email has been subscribed'
            ], 422);
        }
        try {
            Subscriber::create([
                'email' => $email
            ]);
            return response([
                'msg' => 'Subscribe successfully'
            ], 200);
        } catch (\Throwable $th) {
            return response([
                'msg' => 'Subscribe fail, Please try again'
            ], 500);
        }
    }

    public function testEmail()
    {
        Mail::to(['giangtuan6199@gmail.com', 'giangtuan6199+1@gmail.com'])->send(new NewProductNotify(['name' => 'nhãn']));
    }

    public function question(Request $request)
    {
        try {
            Mail::to('nhaxegiangtuan@gmail.com')->send(new Question([
                'name' => $request->name,
                'email' => $request->email,
                'message' => $request->message,
            ]));
        } catch (\Throwable $th) {
            return response([
                'msg' => 'Send question fail'
            ], 500);
        }

        return response([
            'msg' => 'Send question successfully'
        ], 200);
    }
}
