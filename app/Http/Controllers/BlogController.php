<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $post = [
            'id' => 1,
            'title' => 'Lorem ipsum dolor sit amet.',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, ratione.',
        ];


        $posts = array_fill(0, 10, $post);

        return view('blog.index', compact('posts'));
    }

    public function show($post)
    {

        $post = [
            'id' => 1,
            'title' => 'Lorem ipsum dolor sit amet.',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, ratione.',
        ];

        return view('blog.show', ['post' => $post,]);
    }

    public function like($post)
    {
        return "Like this post {$post}";
    }
}
