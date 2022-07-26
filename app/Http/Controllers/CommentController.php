<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use App\Models\Comment;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CommentController extends Controller
{
    public function PostCommentCustomer(Request $request, $id)
    {
        
        $name = $request->session()->get('customer')->name;
        $product_id = $id;
        $email = session()->get('customer')->email;
        $rating = $request->input('rating');
        $comment = $request->input('comment');
        $created_date = $request->input('created_date');
        $cus_id = $request->session()->get('customer')->id;
        

        $cmt = DB::table('comment')
            ->insert([
                'name' => $name,
                'product_id' => $product_id,
                'email' => $email,
                'customer_id' => $cus_id,
                'rating' => $rating,
                'comment' => $comment,
                'created_date' => $created_date
            ]);
        return redirect()->back();
    }

}
