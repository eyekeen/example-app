@extends('layouts.main')

@section('main.content')
    <div class="text-center">
        <h1>
            Home page
            <x-alert title='test alert' status='note'>
                test message
            </x-alert>
        </h1>
    </div>
@endsection