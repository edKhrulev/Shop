<?php
/**
 * Created by PhpStorm.
 * User: edkos
 * Date: 10/23/2018
 * Time: 2:11 PM
 */

namespace App\Http\Controllers\ShopAuth;

use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class ProductController extends Controller
{
    public function getProduct()
    {
        return view('product.create');
    }

    public function postProduct(Request $request)
    {
        $product =  new Product();
        $product->title = $request->title;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->category = $request->category;
//        Storage::put('images', $fileContents);
        $product->image = $request->image;
        $product->save();

        return redirect('/product/create')->with('status', 'Product published ');
    }
}