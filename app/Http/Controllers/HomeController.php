<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use App\Models\Brand;
use App\Models\Comment;
use Http\Controllers\CommentController;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Customers;



class HomeController extends Controller
{
    public function index(Request $request)
    {
        // inRandomOrder()
        // orderBy('price','desc')
        $name = $request->get('sort');
        $categorys = Category::latest()->get();
        if ($name == 'popullar') {
            $products = Product::inRandomOrder()->take(8)->get();
        } elseif ($name == 'most_sold') {
            $products = Product::orderBy('price', 'asc')->take(8)->get();
        } else {
            $products = Product::latest()->take(8)->get();
        }
        return view('home.home', compact('categorys', 'products'));
    }

    public function category($slug, $category_id, Request $request)
    {
        $name = $request->get('sort');

        if ($name == 'popullar') {
            $products = Product::where('category_id', $category_id)->inRandomOrder()->paginate(8)->appends(request()->query());
        } elseif ($name == 'cheapest') {
            $products = Product::where('category_id', $category_id)->orderBy('price', 'asc')->paginate(8)->appends(request()->query());
        } elseif(isset($_GET['start-price']) && $_GET['end-price']){
            $min_price = $_GET['start-price'];
            $max_price = $_GET['end-price'];
            $products = Product::where('category_id', $category_id)->WhereBetween('price', [$min_price, $max_price])->orderBy('price', 'ASC')->paginate(8)->appends(request()->query());
        }
        else {
            $products = Product::where('category_id', $category_id)->paginate(8)->appends(request()->query());
        }

        $brands = Brand::latest()->get();
        $categorys = Category::latest()->get();

        return view('category.category-select-list', compact('products', 'categorys', 'brands'));
    }

    public function brand($slug, $brand_id, Request $request)
    {
        $name = $request->get('sort');

        if ($name == 'popullar') {
            $products = Product::where('brand_id', $brand_id)->inRandomOrder()->paginate(8)->appends(request()->query());
        } elseif ($name == 'cheapest') {
            $products = Product::where('brand_id', $brand_id)->orderBy('price', 'asc')->paginate(8)->appends(request()->query());
        } elseif(isset($_GET['start-price']) && $_GET['end-price']){
            $min_price = $_GET['start-price'];
            $max_price = $_GET['end-price'];
            $products = Product::where('brand_id', $brand_id)->WhereBetween('price', [$min_price, $max_price])->orderBy('price', 'ASC')->paginate(8)->appends(request()->query());
        }
         else {
            $products = Product::where('brand_id', $brand_id)->paginate(8)->appends(request()->query());
        }

        $brands = Brand::latest()->get();
        $categorys = Category::latest()->get();

        return view('category.category-select-list1', compact('products', 'categorys', 'brands'));
    }

    public function search(Request $request)
    {
        $brands = Brand::latest()->get();
        $categorys = Category::latest()->get();

        if(isset($_GET['start-price']) && $_GET['end-price']){
            $min_price = $_GET['start-price'];
            $max_price = $_GET['end-price'];
            $products =  Product::search()->WhereBetween('price', [$min_price, $max_price])->orderBy('price', 'ASC')->paginate(8)->appends(request()->query());
        }
        else{
            $products = Product::search()->paginate(8);
        }
        
        return view('search.search', compact('products', 'categorys', 'brands'));
    }

    public function productdetails($id)
    {
        $categorys = Category::latest()->get();
        $products = Product::where('id', $id)->get();
        $rating = Product::where('id', $id)->get();
        // $image_details = ProductImage::where('product_id', $id)->get();
        $rating_count = Comment::where('product_id', $id)->get();
        $rating_count1 = Comment::where('product_id', $id)->get()->count();
        $rating_sum = Comment::where('product_id', $id)->sum('rating');
        if($rating_count1 > 0){
            $rating_value = $rating_sum/$rating_count->count();
        }
        else{
            $rating_value = 0;
        }
        
        


        $cmt = DB::table('comment')
        ->where('product_id', intval($id))
        ->join('customers', 'comment.customer_id', '=', 'customers.id')
        ->get();

        $pid = DB::table('products')
        ->where('id', intval($id))//phân uwwhere á 
        ->first();

        return view('product.product-details', compact('products', 'categorys', 'rating_count', 'rating_value'), ['pid' => $pid, 'cmt' => $cmt]);
    }

    public function about(){
        return view ('about.about');
    }
    public function contactUs(){
        return view ('contactUs.contactUs');
    }
    public function historyOrder(){
        return view ('history.historyOrder');
    }
}
