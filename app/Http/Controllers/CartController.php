<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\ProductRepositoryInterface;
use App\Services\CartService;
use Illuminate\Http\Request;

class CartController extends Controller
{
    private $productRepository;
    private $cartService;

    public function __construct(
        ProductRepositoryInterface $productRepository,
        CartService $cartService
    ) {
        $this->productRepository = $productRepository;
        $this->cartService = $cartService;
    }

    public function addToCart(Request $request)
    {
        $product = $this->productRepository->show($request->productId);
        $quantity = $request->quantity ?? 1;
        $cart = session('cart', null);
        $cartProductQuantity = isset($cart['items'][$product->id]) ? $cart['items'][$product->id]['quantity'] : 0;
        if ($product->quantity < ($quantity + $cartProductQuantity)) {
            return response([
                'error' => "This product isn't enough quantity"
            ], 422);
        }
        $product->price = $product->price;
        $cart = $this->cartService->addToCart($cart, $product, $quantity);
        session(['cart' => $cart]);

        return response()->json([
            'cart' => $cart,
            'product' => $product
        ]);
    }

    public function updateCart(Request $request)
    {
        $products = $request->products ?? [];

        $cart = null;
        foreach ($products as $item) {
            $product = $this->productRepository->show($item['id']);
            $product->price = $product->price;
            $cart = $this->cartService->addToCart($cart, $product, $item['quantity']);
        }
        session(['cart' => $cart]);
        return redirect('cart');
    }

    public function removeFromCart(Request $request)
    {
        $product = $this->productRepository->show($request->productId);


        $cart = session('cart');
        $cart = $this->cartService->removeItem($cart, $product);
        session(['cart' => $cart]);

        return response()->json(['cart' => $cart]);
    }

    public function subQuantity(Request $request)
    {
        $product = $this->productRepository->show($request->productId);

        $cart = session('cart');
        $cart = $this->cartService->removeFromCart($cart, $product);
        session(['cart' => $cart]);

        return response()->json(['cart' => $cart]);
    }
}
