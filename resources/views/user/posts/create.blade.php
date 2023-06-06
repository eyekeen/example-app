@extends('layouts.main')

@section('page.title', 'User post create')

@section('main.content')

<x-title>
    {{ __('User post create') }}

    <x-slot name='link'>
        <a href="{{ route('user.posts') }}">
            {{ __('Back') }}
        </a>
    </x-slot>
</x-title>

<x-post.form action="{{ route('user.posts.store') }}" method="post" >
    <x-button type="submit">
        {{ __('Create')  }}
    </x-button>
</x-post.form>

@endsection
