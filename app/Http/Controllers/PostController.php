<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use DB;

class PostController extends Controller
{
    public function store(Request $request)
    {
       $post = new Post();
       $post->postid = uniqid();
       $post->title = $request->title;
       $post->content = $request->content;
       $post->save();

       return response()->json(['success' => true, 'post' => $post,'id'=>uniqid()]);
     }

     public function post(Request $request)
     {
        $rows = DB::select('select * from post');

        return response()->json(['success' => true, 'table' => $rows]);
      }

      public function postcomment(Request $request)
      {
         $post = Post::find($request->postid);
         if(!$post){
           return response()->json(['success' => false, 'log'=>'no comment']);
         }
         $comment = $post->comment->sortByDesc("created_at");

         return response()->json(['success' => true,'comment' => $comment]);
       }
}
