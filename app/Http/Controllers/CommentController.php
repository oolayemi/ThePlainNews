<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Post $post){
        /*$inputs = request()->validate([
            'name'=>'required|max:255',
            'email' => 'required',
            'message' => 'required'
        ]);*/

        Comment::create([
            'name' => request('name'),
            'email' => request('email'),
            'post_id' => $post->id,
            'message' => request('message')
        ]);

        return back();
    }
}
