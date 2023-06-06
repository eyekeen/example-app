<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $category_id = $request->input('category_id');

        $post = [
            'id' => 1,
            'title' => 'Lorem ipsum dolor sit amet.',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, ratione.',
            'category_id' => 1
        ];


        $posts = array_fill(0, 10, $post);

        $posts = array_filter($posts, function($post) use ($search, $category_id){
           if ($search && !str_contains(strtolower($post['title']), strtolower($search))){
                    return false;
           }

            if ($category_id && $post['category_id'] != $category_id){
                return false;
            }

           return true;
        });

        $categories = [
            null => __('All categories'),
            1 => 'First category',
            2 => 'Second category',
        ];

        return view('blog.index', compact('posts', 'categories'));
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

    public function store(Request $request)
    {
        dd($request);
    }
}
