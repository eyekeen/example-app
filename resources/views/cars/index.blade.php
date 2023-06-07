@extends('layouts.main')

@section('page.title', 'Car list')

@section('main.content')

    <x-title>
        {{ __('Car list') }}

        <x-slot name='right'>
            <x-button-link href="{{ route('cars.create') }}">
                {{ __('Add car') }}
            </x-button-link>
        </x-slot>
    </x-title>

    @if (empty($cars))
        {{ __('Cars not found') }}
    @else

        <div class="row">
            @foreach ($cars as $car)

                <div class="mb-3">
                    <h2 class="h6">
                        <a href="{{ route('cars.show', $car['id']) }}">
                            {{ $car['brand'] . ' ' . $car['model'] }}
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
