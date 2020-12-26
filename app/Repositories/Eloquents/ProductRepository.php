<?php

namespace App\Repositories\Eloquents;

use App\Models\Category;
use App\Models\Product;
use App\Repositories\Contracts\ProductRepositoryInterface;

class ProductRepository extends RepositoryAbstract implements ProductRepositoryInterface
{
    public function __construct(Product $model)
    {
        $this->model = $model;
    }

    public function hotProduct()
    {
        return $this->model->hotProduct()->get();
    }

    public function comingProduct()
    {
        return $this->model->comingProduct()->get();
    }
}
