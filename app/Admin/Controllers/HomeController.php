<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Encore\Admin\Controllers\Dashboard;
use Encore\Admin\Layout\Column;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;

class HomeController extends Controller
{
    public function index(Content $content)
    {
        $todayOrders = Order::whereDate('created_at', now())->get();
        $monthOrders = Order::whereMonth('created_at', now())->get();

        return $content
            ->title('Dashboard')
            ->description('Description...')
            ->row(Dashboard::title())
            ->view('admin.dashboard', [
                'todayOrders' => $todayOrders,
                'monthOrders' => $monthOrders,
            ]);
    }
}
