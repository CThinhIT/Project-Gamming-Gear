<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class User_CartController extends Controller
{
    public function cart()
    {
        return view('basket.cart');
    }

    public function checkOut()
    {
        return view('basket.checkOut');
    }
    public function addToCart($id)
    {
        $product_order = Products::find($id);
        if (!$product_order) {
            abort(404);
        }

        $cart = Session::get('cart');

        if (!$cart) {
            $cart = [
                $id => [
                    "name" => $product_order->name,
                    "quantity" => 0,
                    "price" => $product_order->price,
                    "image" => $product_order->image_avatar,
                ]
            ];
            Session::put('cart', $cart);
        }
        if (isset($cart[$id])) {

            $cart[$id]['quantity']++;

            Session::put('cart', $cart);

            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }

        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "name" => $product_order->name,
            "quantity" => 1,
            "price" => $product_order->price,
            "image" => $product_order->image_avatar,
        ];

        Session::put('cart', $cart);

        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function remove($id)
    {
        $cart = Session::get('cart');
        if (isset($cart[$id])) {
            unset($cart[$id]);
            Session::put('cart', $cart);
        }
        return redirect()->back();
    }
}
