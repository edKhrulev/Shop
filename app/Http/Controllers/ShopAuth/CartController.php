<?php
namespace App\Http\Controllers\ShopAuth;

use App\Models\Order;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function getCart(Request $request, $productId)
    {
        if (session('order')) {
            $order = new Order();
            $order->status = 'pending';
            $order->added_at = new \DateTime();
            $order->save();
            session('order');
            $products = Product::where('id', '=', $productId)->get();

        } else {
            $order = new Order();
            $order->save();
            $data = [
                $order->id => [
                    $productId
                ]
            ];
            session(['order' => $data]);
            $products = Product::where('id', '=', $productId)->get();
        }
        return view('shopAuth.cart', ['products' => $products, 'order' => $order]);
    }
}