<?php

namespace App\Admin\Controllers;

use App\Models\Product;
use App\Repositories\Contracts\CategoryRepositoryInterface;
use App\Repositories\Contracts\ProductRepositoryInterface;
use App\Traits\FileStorageTrait;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;
use Illuminate\Http\Request;

class ProductController extends AdminController
{
    use FileStorageTrait;

    protected $categoryRepository;
    protected $productRepository;

    public function __construct(
        CategoryRepositoryInterface $categoryRepository,
        ProductRepositoryInterface $productRepository
    ) {
        $this->categoryRepository = $categoryRepository;
        $this->productRepository = $productRepository;
    }

    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Product';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Product());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('unit_price', __('Unit price'));
        $grid->column('unit', __('Unit'));
        $grid->column('category_id', __('Category id'));
        $grid->column('promotion_price', __('Promotion price'));
        $grid->column('promotion_percent', __('Promotion percent'));
        $grid->column('promotion_start_date', __('Promotion start date'));
        $grid->column('promotion_end_date', __('Promotion end date'));
        $grid->column('description', __('Description'));
        $grid->column('deleted_at', __('Deleted at'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Product::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('unit_price', __('Unit price'));
        $show->field('unit', __('Unit'));
        $show->field('category_id', __('Category id'));
        $show->field('promotion_price', __('Promotion price'));
        $show->field('promotion_percent', __('Promotion percent'));
        $show->field('promotion_start_date', __('Promotion start date'));
        $show->field('promotion_end_date', __('Promotion end date'));
        $show->field('description', __('Description'));
        $show->field('deleted_at', __('Deleted at'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $categories = $this->categoryRepository->all()->pluck('name', 'id')->toArray();

        $form = new Form(new Product());

        $form->select('category_id', __('Category id'))->options($categories);
        $form->text('name', __('Name'));
        $form->text('unit', __('Unit'));
        $form->number('unit_price', __('Unit price'));
        $form->number('promotion_price', __('Promotion price'));
        // $form->switch('promotion_percent', __('Promotion percent'));
        $form->date('promotion_start_date', __('Promotion start date'))->default(date('Y-m-d'));
        $form->date('promotion_end_date', __('Promotion end date'))->default(date('Y-m-d'));
        $form->textarea('description', __('Description'));
        $form->image('image', __('Image'));
        $form->multipleImage('images', __('Gallery Image'))->pathColumn('url')->removable();

        return $form;
    }

    // public function storeProduct(Request $request)
    // {
    //     $imageUrl = $this->uploadFile('images', $request->file('image'));
    //     $product = $request->only([
    //         'category_id',
    //         'name',
    //         'unit',
    //         'unit_price',
    //         'promotion_price',
    //         'promotion_start_date',
    //         'promotion_end_date',
    //         'description',
    //     ]);

    //     $product["image"] = $imageUrl;
    //     $newProduct = $this->productRepository->store($product);
    //     $galleryImages = $this->uploadFiles('images', $request->file('gallery_image'));
    //     $newProduct->images()->createMany(array_map(function ($value) {
    //         return ['url' => $value];
    //     }, $galleryImages));
    // }

    // public function edit($id, Content $content)
    // {
    //     // $product = $this->productRepository->show($id);
    //     // $product->images()->create(['url' => 'hello']);
    //     // dd('1');
    //     $test = ['a', 'b', 'c'];

    //     dd(array_map(function ($value) {
    //         return ['url' => $value];
    //     }, $test));
    // }
}
