@extends('layouts.main')

@section('main.content')
    <div class="text-center">
        <h1>
            Home page
            <x-alert type="warning" title="title" message="message"/>
        </h1>
    </div>
@endsection
