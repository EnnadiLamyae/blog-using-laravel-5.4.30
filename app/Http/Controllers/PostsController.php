<?php

namespace App\Http\Controllers;

use App\Post;
use App\Tag;


class PostsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['index','show']);
    }

    public function index(){



        $posts = Post::latest()
            ->filter(request(['month','year']))
            ->get();





        return view('blog.index',compact('posts'));
    }

    public function create(){

        return view('posts.create');
    }

    public function store(){

        $this->validate(request(),[

            'title'=> 'required|min:3',
            'body'=>'required'

        ]);

        auth()->user()->publish(
            new Post(request(['title','body']))
        );
        flash('Your post has been published.')->success();

        return redirect('/');
    }
    public function show(Post $post){



        return view('posts.show',compact('post'));
    }
}
