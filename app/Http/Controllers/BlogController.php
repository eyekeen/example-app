<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $category_id = $request->input('category_id');

        $categories = [
            null => __('All categories'),
            1 => 'First category',
            2 => 'Second category',
        ];

//        вернет первую запись
        $post = Post::query()->first();
//        вернет поле title
        $post->getAttribute('title');
//        или
        $post->title;

//      вернет null так как у данной модели не такого аттрибута
        $post->getAttribute('foo');
        $post->foo;


        $posts = Post::all(); // вернет все записи со всеми столбцами из таблицы
        $posts = Post::all(['id', 'title', 'published_at']); // вернет все записи со столбцами перечисленными в массиве

        $posts = Post::query()->get(); // возвращает все записи но позволяет использовать дополнительные условия, например limit
        $posts = Post::query()->get(['id', 'title', 'published_at']); // в массиве можно указать какие столбцы нужно вернуть

        $posts = Post::query()->limit(12)->get(); // получить первые 12 записей
        $posts = Post::query()->take(12)->get(); // псевдоним limit

        $validated = $request->validate([
            'limit' => ['nullable', 'integer', 'min:1', 'max:100'],
            'page' => ['nullable', 'integer', 'min:1', 'max:100'],
        ]);

        $page = $validated['page'] ?? 1;
        $limit = $validated['limit'] ?? 12;
        $offset = $limit * ($page - 1);


        $posts = Post::query()->orderBy('published_at', 'desc')->paginate(12, ['id', 'title', 'published_at']); // сортировка записей по убыванию

        return view('blog.index', compact('posts', 'categories'));
    }

    public function show(Request $request, Post $post)
    {
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
