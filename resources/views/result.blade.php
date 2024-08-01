@extends('Layout/layout')

@section('title', 'To do List -')

@section('container')

    <div class="container">
        <h1>Detected Animals</h1>
        <ul>
            @foreach ($animals as $animal)
                <li>{{ is_array($animal) ? json_encode($animal) : $animal }}</li>
            @endforeach
        </ul>
    </div>

    <link href="{{ asset('/css/result.css') }}" rel="stylesheet">

@endsection
