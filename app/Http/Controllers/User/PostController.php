<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\StorePostRequest;
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

        $post = [
            'id' => 1,
            'title' => 'Lorem ipsum dolor sit amet.',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, ratione.',
        ];


        $posts = array_fill(0, 10, $post);

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
//        $validated = $request->validated();

//        $validated = $request->validate([
//            'title' => ['required', 'string', 'max:100'],
//            'content' => ['required', 'string', 'max:10000'],
//        ]);
//
//        $validated = validator($request->all(), [
//            'title' => ['required', 'string', 'max:100'],
//            'content' => ['required', 'string', 'max:10000'],
//        ])->validate();

//        if (true) {
//            throw ValidationException::withMessages([
//                    'account' => 'Malo deneg'
//                ]
//            );
//        }

        $validated = validate($request->all(), [
            'title' => ['required', 'string', 'max:100'],
            'content' => ['required', 'string', 'max:10000'],
        ]);

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
