<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Products;
use App\Models\Category;
use App\Models\Sub_Category;
use App\Models\Brands;
use App\Models\Order;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
          $completedOrders = Order::where('order_status', 'completed')
        ->orderBy('updated_at', 'desc')
        ->take(10)
        ->get();
         $data = [
            'order' => $completedOrders,
            'totalUsers'         => User::count(),
            'totalProducts'      => Products::count(),
            'totalCategories'    => Category::count(),
            'totalSubCategories' => Sub_Category::count(),
            'totalBrands'        => Brands::count(),
            'totalOrders'        => Order::count(),
            'pendingOrders'      => Order::where('order_status', 'pending')->count(),
            'shippingOrders'     => Order::where('order_status', 'shipping')->count(),
            'completedOrders'    => Order::where('order_status', 'completed')->count(),
        ];
       return view("admin.index" , $data);
    }


}
