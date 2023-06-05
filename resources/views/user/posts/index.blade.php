@extends('layouts.main')

@section('page.title', 'My posts')

@section('main.content')

<x-title>
    {{ __('My posts') }}

    <x-slot name='right'>
        <x-button-link href="{{ route('user.posts.create') }}">
            {{ __('Create post') }}
        </x-button-link>
    </x-slot>
</x-title>

@if (empty($posts))

    {{ __('Posts not found') }}

@else

<div class="row">
    @foreach ($posts as $post)

    <div class="mb-3">
        <h2 class="h6">
            <a href="{{ route('user.posts.show', $post['id']) }}">
                {{ $post['title'] }}
            </a>
        </h2>

        <div class="small text-muted">
            {{ now()->format('d.m.Y H:i:s') }}
        </div>
    </div>

    @endforeach
</div>

@endif

@endsection