@extends('layouts.main')

@section('page.title', 'User post edit')

@section('main.content')

<x-title>
    {{ __('User post edit') }}

    <x-slot name='link'>
        <a href="{{ route('user.posts.show', $post['id']) }}">
            {{ __('Back') }}
        </a>
    </x-slot>
</x-title>

<x-post.form action="{{ route('user.posts.update', $post['id']) }}" method="put" :post="$post" />

@endsection
