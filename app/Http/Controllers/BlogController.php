<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return 'All post';
    }

    public function show($post)
    {
        return "Show post {$post}";
    }

    public function like($post)
    {
        return "Like this post {$post}";
    }
}
