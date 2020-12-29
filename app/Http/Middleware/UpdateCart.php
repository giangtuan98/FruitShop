<?php

namespace App\Http\Middleware;

use App\Services\CartService;
use Closure;
use Illuminate\Http\Request;

class UpdateCart
{

    private $cartService;

    public function __construct(

        CartService $cartService
    ) {

        $this->cartService = $cartService;
    }
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

        $this->cartService->updateCart(session('cart', null));

        return $next($request);
    }
}
