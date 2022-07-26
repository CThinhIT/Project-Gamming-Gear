<?php

namespace App\Http\Controllers;

use App\Models\Wishlist;
use App\Models\Product;
use App\Http\Controller\HomeController;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\exists;
use App\Http\Controllers\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\Paginator;

class WishlistController extends Controller
{
    private $wishlist;
    public function __construct(wishlist $wishlist)
    {

        $this->wishlist = $wishlist;
    }
    public function wishlist(Request $request)
    {
        $user = Session::get('cus_id');
        $wishlist = Wishlist::where('customer_id', $user)->latest()->paginate(5);
        return view('favorite.wishlist', compact('wishlist'));
    }

    public function add(Request $request)
    {
        $pro_id = $request->input('pro_id');

        if (Product::find($pro_id)) {
            $wish = new Wishlist();
            $wish->product_id = $pro_id;
            $wish->customer_id =  $request->session()->get('customer')->id;
            $products = Wishlist::Where('product_id', $wish->product_id)->orWhere('customer_id', $wish->customer_id);

            $p = Wishlist::Where('product_id', $wish->product_id)->Where('customer_id', $wish->customer_id)->get()->count();
            if ($p != 0) {
                return response()->json(['status' => "Product already exists"]);
            } else {
                $wish->save();
                return response()->json(['status' => "Product added to Wishlist"]);
            }
        } else {
            return response()->json(['status' => "Product does not exist"]);
        }
    }

    public function destroy($id)
    {        
        $de = Wishlist::Where('id', $id);
        $de->delete();

        return redirect()->back();
    }
}
