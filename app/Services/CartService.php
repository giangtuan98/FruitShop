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

        return $cart;
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

        return $cart;
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

        return $cart;
    }
}
