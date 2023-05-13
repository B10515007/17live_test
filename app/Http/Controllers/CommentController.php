<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Post;


class CommentController extends Controller
{
  public function store(Request $request)
  {
      $post = Post::find($request->postid);
      if(!$post){
        return response()->json(['success' => false, 'log' => 'id not found']);
      }
      $comment = Comment::create(['comment'=>$request->comment]);
      $comment = $post->comment()->save($comment);

     return response()->json(['success' => true, 'comment' => $comment]);
   }


}
