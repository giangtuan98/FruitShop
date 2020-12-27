<?php

namespace App\Repositories\Eloquents;

use App\Models\Order;
use App\Repositories\Contracts\OrderRepositoryInterface;

class OrderRepository extends RepositoryAbstract implements OrderRepositoryInterface
{
    public function __construct(Order $model)
    {
        $this->model = $model;
    }
}
