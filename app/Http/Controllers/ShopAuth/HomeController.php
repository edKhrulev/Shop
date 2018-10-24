<?php
namespace App\Http\Controllers\ShopAuth;

use App\Models\Product;
use App\Http\Controllers\Controller;


class HomeController extends Controller
{
    public function getHome()
    {
        $products = Product::all();
        return view('shopAuth.home', ['products' => $products]);
    }
}