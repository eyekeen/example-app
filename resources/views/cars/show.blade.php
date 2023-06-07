@extends('layouts.main')

@section('page.title', 'User post view')

@section('main.content')

    <x-title>
        {{ __('Car view') }}

        <x-slot name='link'>
            <a href="{{ route('cars.index') }}">
                {{ __('Back') }}
            </a>
        </x-slot>
    </x-title>

    <h2 class="h4">
        {{ $car['brand'] }}
    </h2>

    <div class="small text-muted">
        {{ now()->format('d.m.Y H:i:s') }}
    </div>

    <div class="pt-3">
        {{ $car['model'] }}
    </div>
    <div class="pt-3">
        {{ $car['description'] }}
    </div>

@endsection
