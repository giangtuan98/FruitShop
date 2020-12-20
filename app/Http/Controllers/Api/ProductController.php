<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Repositories\Contracts\ProductRepositoryInterface;
use App\Repositories\Eloquents\CategoryRepository;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $productRepository;
    private $categoryRepository;

    public function __construct(
        ProductRepositoryInterface $productRepository,
        CategoryRepository $categoryRepository
    ) {
        $this->productRepository = $productRepository;
        $this->categoryRepository = $categoryRepository;
    }

    public function detail($id)
    {
        $productDetail = $this->productRepository->findOrFail($id);
        $productDetail->load('category', 'images');
        $productDetail->is_sale = $productDetail->is_sale;

        return response()->json([
            'product' => $productDetail,
        ]);
    }
}
