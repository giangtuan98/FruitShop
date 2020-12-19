<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\ProductRepositoryInterface;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $productRepository;

    public function __construct(ProductRepositoryInterface $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function index()
    {
        $products = $this->productRepository->all();
        $hotProducts = $this->productRepository->hotProduct();
        $comingProducts = $this->productRepository->comingProduct();
        // dd($comingProducts);

        return view('home.index', [
            'products' => $products,
            'hotProducts' => $hotProducts,
            'comingProducts' => $comingProducts,
        ]);
    }
}
