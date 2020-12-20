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
        $product->price = $product->price;
        $cart = session('cart', null);
        $cart = $this->cartService->addToCart($cart, $product, $request->quantity ?? 1);
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
