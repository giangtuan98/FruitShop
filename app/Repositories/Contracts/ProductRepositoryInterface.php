<?php

namespace App\Repositories\Contracts;

interface ProductRepositoryInterface extends RepositoryInterface
{
    public function hotProduct();
    public function comingProduct();
}
