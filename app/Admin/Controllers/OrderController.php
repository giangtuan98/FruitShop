<?php

namespace App\Admin\Controllers;

use App\Models\Order;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class OrderController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Order';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Order());

        $grid->column('id', __('Id'));
        $grid->column('code', __('Code'));
        $grid->column('customer_info->name', __('Name'));
        $grid->column('customer_info->email', __('Email'));
        $grid->column('customer_info->phone', __('Phone'));
        $grid->column('total', __('Total'));
        $grid->column('created_at', __('Created at'));

        $grid->disableCreateButton();
        $grid->actions(function ($actions) {
            $actions->disableDelete();
            $actions->disableEdit();
        });

        $grid->filter(function ($filter) {
            $filter->like('code', 'code');
            $filter->between('created_at', 'date')->date();

            // $filter->group('created_at', function ($group) {
            //     $group->gt('greater than');
            //     $group->lt('less than');
            //     $group->nlt('not less than');
            //     $group->ngt('not greater than');
            //     $group->equal('equal to');
            // })->date();
        });


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
        $show = new Show(Order::findOrFail($id));
        $show->field('id', __('Id'));
        $show->field('code', __('Code'));
        $show->name()->as(function () {
            return $this->customer_info['name'];
        });
        $show->email()->as(function () {
            return $this->customer_info['email'];
        });
        $show->phone()->as(function () {
            return $this->customer_info['phone'];
        });
        $show->address()->as(function () {
            return $this->customer_info['address'];
        });
        $show->total()->as(function () {
            return number_format($this->total);
        });
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        $show->panel()
            ->tools(function ($tools) {
                $tools->disableEdit();
                $tools->disableDelete();
            });

        $show->orderDetails('Detail', function ($detail) {

            $detail->column('id', __('Id'));
            $detail->column('product_id', __('Product id'));
            $detail->column('product.name', __('Product name'));
            $detail->quantity();
            $detail->unit_price()->display(function () {
                return number_format($this->unit_price);
            });
            $detail->total()->display(function () {
                return number_format($this->quantity * $this->unit_price);
            });
            $detail->disableCreateButton();
            $detail->disableCreateButton();
            $detail->disableFilter();
            $detail->disableExport();
            $detail->disableActions();
        });
        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Order());

        $form->text('customer_info', __('Customer info'));
        $form->number('total', __('Total'));
        $form->text('code', __('Code'));

        return $form;
    }
}
