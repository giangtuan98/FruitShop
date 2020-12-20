<?php

namespace App\Traits;

use App\Models\Product;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

trait SortTrait
{
    public function sortProductByOrderType(Collection $items, $orderType)
    {
        // if ($orderType == Product::SORT_PRICE_LOW_TO_HIGH) {
        //     $items = $items->sort(function ($a, $b) {
        //         return $a->price > $b->price;
        //       });
        // }

        // if ($orderType == Product::SORT_PRICE_HIGH_TO_LOW) {
        //     $items = $items->sort(function ($a, $b) {
        //         return $a->price < $b->price;
        //       });
        // }

        // if ($orderType == Product::SORT_PRICE_HIGH_TO_LOW) {
        //     $items = $items->sort(function ($a, $b) {
        //         return $a->price < $b->price;
        //       });
        // }

        return $items;
    }
}
