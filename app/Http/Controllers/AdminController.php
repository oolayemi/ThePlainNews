<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /*
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function create()
    {
        return view('admin.contact');

    }

    public function store()
    {
        $inputs = request()->validate([
            'title'=>'required|min:3|max:255',
            'content'=>'required|min:50',
            'category'=>'required',
        ]);

        //$this->authorize('create', Post::class);
        $inputs['slug'] = strtolower(str_replace(' ', '-', request('title'))) ;
        $inputs['likes'] = 499;


        auth()->user()->posts()->create($inputs);

        return redirect()->route('post.index');

        //return back();
    }
}
