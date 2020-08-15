<?php

namespace App\Http\Controllers;

use App\User;
use App\Product;
use App\Category;
use Illuminate\Http\Request;

class DashboardProductController extends Controller
{
    public function index()
    {
        $products = Product::with(['galleries','category'])->get();

        return view('pages.dashboard-products',[
            'products' => $products
        ]);
    }

    public function details()
    {
        return view('pages.dashboard-products-details');
    }

    public function create()
    {
        $users = User::all();
        $categories = Category::all();

        return view('pages.dashboard-products-create',[
            'users' => $users,
            'categories' => $categories
        ]);
    }
}
