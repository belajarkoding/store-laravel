<?php

namespace App\Http\Controllers;

use App\User;
use App\Product;
use App\Category;
use App\ProductGallery;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\ProductRequest;

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

    

    public function store(ProductRequest $request)
    {
        $data = $request->all();

        $data['slug'] = Str::slug($request->name);
        $product = Product::create($data);

        $gallery = [
            'products_id' => $product->id,
            'photos' => $request->file('photo')->store('assets/product', 'public')
        ];
        ProductGallery::create($gallery);

        return redirect()->route('dashboard-product');
    }
}
