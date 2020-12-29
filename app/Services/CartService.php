<?php

namespace App\Services;

use App\Models\Product;

class CartService
{
    public function addToCart($cart, Product $item, $quantity = 1)
    {
        if (!$cart) {
            $cart = $this->createCart();
        }

        $items = $cart['items'];

        if (!isset($items[$item->id])) {
            $items[$item->id] = [
                'item' => $item,
                'quantity' => $quantity,
                'total' => $quantity * $item->price
            ];
        } else {
            $items[$item->id]['quantity']++;
            $items[$item->id]['total'] += $quantity * $item->price;
        }

        $cart['quantity'] += $quantity;
        $cart['total'] += $item->price * $quantity;
        $cart['items'] = $items;

        return $this->updateCart($cart);
    }

    public function removeFromCart($cart, Product $item, $quantity = 1)
    {
        if (!$cart) {
            $this->createCart();
        }

        $items = $cart['items'];

        if (!isset($items[$item->id])) {
            return $cart;
        }


        $quantity = $items[$item->id]['quantity'] >= $quantity ? $quantity : $items[$item->id]['quantity'];

        $newQuantity = $items[$item->id]['quantity'] - $quantity;

        if ($newQuantity <= 0) {
            unset($items[$item->id]);
        } else {
            $items[$item->id]['quantity'] = $newQuantity;
        }

        $cart['quantity'] -= $quantity;
        $cart['total'] -= $item->price * $quantity;
        $items[$item->id]['quantity'] = $newQuantity;
        $items[$item->id]['total'] -= $item->price * $quantity;
        $cart['items'] = $items;

        return $this->updateCart($cart);
    }

    public function createCart()
    {
        return [
            'items' => [],
            'quantity' => 0,
            'total' => 0
        ];
    }

    public function removeItem($cart, $item)
    {
        if (!$cart) {
            $cart = $this->createCart();
        }

        $items = $cart['items'];

        if (!isset($items[$item->id])) {
            return $cart;
        }

        $quantity = $items[$item->id]['quantity'];
        $total = $items[$item->id]['total'];
        unset($items[$item->id]);

        $cart['quantity'] -= $quantity;
        $cart['total'] -= $total;
        $cart['items'] = $items;

        return $this->updateCart($cart);
    }

    public function updateCart($cart)
    {
        if (!$cart) {
            $cart = $this->createCart();
        }

        $total = 0;
        $totalQuantity = 0;

        $listProductId = array_keys($cart['items']);
        $listProduct = Product::whereIn('id', $listProductId)->with('category')->get();
        $items = $cart['items'];
        foreach ($listProduct as $product) {
            if ($items[$product->id]['quantity'] <= 0) {
                unset($items[$product->id]);
            } else {
                $quantity = $product->quantity >= $items[$product->id]['quantity'] ? $items[$product->id]['quantity'] : $product->quantity;
                $itemTotal = $product->price * $quantity;
                $items[$product->id]['item'] = $product;
                $items[$product->id]['total'] = $itemTotal;
                $items[$product->id]['quantity'] = $quantity;
                $total += $itemTotal;
                $totalQuantity += $quantity;
            }
        }

        $cart['items'] = $items;
        $cart['total'] = $total;
        $cart['quantity'] = $totalQuantity;

        session()->put('cart', $cart);

        return $cart;
    }
}
