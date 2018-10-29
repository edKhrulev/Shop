<?php
namespace App\Http\Controllers\ShopAuth;

use App\Models\Order;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\UserOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class CartController extends Controller
{
    public function getCart(Request $request, $productId)
    {
        if (session('order')) {

            $currentOrder = session('order');
            $currentOrder['products'][] = $productId;
            Session::forget('order');
            session(['order' => $currentOrder]);
            $products = Product::whereIn('id', $currentOrder['products'])->get();

        } else {

            $order = new Order();
            $order->status = 'pending';
            $dateTime = new \DateTime();
            $order->added_at = $dateTime;
            $order->save();
            $data = [
                'orderId' => $order->id,
                'products' => [
                    $productId
                ]
            ];
            session(['order' => $data]);
            $products = Product::where('id', '=', $productId)->get();
        }
        return view('shopAuth.cart', ['products' => $products]);
    }

    public function getOrder()
    {
        if (!session('order')) {
            return redirect('/');
        }

        $currentOrder = session('order');
//        dd($currentOrder);
        $userId = session('userId');
        $orderId = $currentOrder['orderId'];
        $productIds = $currentOrder['products'];
        foreach ($productIds as $productId)
        {
            $userOrder = new UserOrder();

            $userOrder->user_id = $userId;
            $userOrder->order_id = $orderId;
            $userOrder->product_id = $productId;
            $userOrder->save();
        }
        Session::forget('order');
        return view('ShopAuth.thanksPage', ['orderId' => $orderId]);
    }
}