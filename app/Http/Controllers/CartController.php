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
}
