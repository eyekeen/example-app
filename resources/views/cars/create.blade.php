@extends('layouts.main')

@section('page.title', 'Car create')

@section('main.content')

    <x-title>
        {{ __('Car create') }}

        <x-slot name='link'>
            <a href="{{ route('cars.index') }}">
                {{ __('Back') }}
            </a>
        </x-slot>
    </x-title>

    <x-car.form action="{{ route('cars.store') }}" method="post" >
        <x-button type="submit">
            {{ __('Create')  }}
        </x-button>
    </x-car.form>

@endsection
