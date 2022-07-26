<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Comment;
use Carbon\Carbon;

class AdminCommentController extends Controller
{
    private $comment;

    public function __construct(Comment $comment)
    {
        $this->comment = $comment;
    }

    public function adminComment(){
        $c = DB::table('comment')->get();
      return view ('admin.comment.comment', compact('c'));
    }
    
    public function delete($id)
    {
        $this->comment->find($id)->delete();
        return redirect()->route('adminComment');
    }
}
