<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index', [
            'totalProducts' => Product::count(),
            'totalCategories' => Category::count(),
            'totalUsers' => User::count(),
            'totalOrders' => Order::count(),
        ]);
    }
}
