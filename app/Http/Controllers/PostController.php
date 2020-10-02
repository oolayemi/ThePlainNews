<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use App\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
        return view('welcome', ['posts' => $posts]);
    }

    public function create(){
        return view('admin.contact');
    }

    public function store(Request $request){
    }

    public function show(Post $post){
        $posts = Post::all();
        $comments = Comment::all();
        return view('single-post', ['post'=>$post, 'posts'=>$posts, 'comments'=>$comments]);
    }

    public function showByTag(Tag $tag){
        return view('category-post', ['tag'=>$tag]);
    }

    public function edit(Post $post){
    }

    public function update(Request $request, Post  $post){
    }

    public function destroy(Post  $post){
    }
}
