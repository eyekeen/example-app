@extends('layouts.base')

@section('page.title', 'Blog')

@section('content')
    <h1>Post list</h1>

    @if (empty($posts))
        Not found posts
    @else
        @foreach ($posts as $post)
        <div>
            <h5>
                <a href="{{ route('blog.show', $post['id']) }}">
                    {{ $post['title'] }}
                </a>
            </h5>
            <p>
                {{ $post['content'] }}
            </p>
            
        </div>
        @endforeach
    @endif

@endsection


