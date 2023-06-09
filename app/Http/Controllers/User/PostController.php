<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\StorePostRequest;
use App\Models\Post;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Validation;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $posts = Post::query()
            ->orderBy('published_at', 'desc')
            ->paginate(12, ['id', 'title', 'published_at']);

        return view('user.posts.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $post = [
            'id' => 1,
            'title' => 'Lorem ipsum dolor sit amet.',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, ratione.',
        ];

        return view('user.posts.create', ['post' => $post]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {


        $validated = validate($request->all(), [
            'title' => ['required', 'string', 'max:100'],
            'content' => ['required', 'string', 'max:10000'],
            'published_at' => ['nullable', 'string', 'date'],
            'published' => ['nullable', 'boolean'],
        ]);
        // метод firstOrCreate =
        $post = Post::query()->firstOrCreate(
            [
                'user_id' => User::query()->value('id'),
                'title' => $validated['title']
            ],
            [
                'content' => $validated['content'],
                'published_at' => new Carbon($validated['published_at'] ?? null),
                'published' => $validated['published'] ?? false,
            ]);

        dd($post->toArray());

        alert(__('Created'));
        return redirect()->route('user.posts.show', 123);
    }

    /**
     * Display the specified resource.
     */
    public function show($post)
    {

        $post = [
            'id' => 1,
            'title' => 'Lorem ipsum dolor sit amet.',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, ratione.',
        ];

        return view('user.posts.show', ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($post)
    {
        $post = [
            'id' => 1,
            'title' => 'Lorem ipsum dolor sit amet.',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, ratione.',
        ];

        return view('user.posts.edit', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $post)
    {
        $validated = validate($request->all(), [
            'title' => ['required', 'string', 'max:100'],
            'content' => ['required', 'string', 'max:10000'],
        ]);

        alert(__('Saved'));

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($post)
    {
        return redirect()->route('user.posts');
    }
}
