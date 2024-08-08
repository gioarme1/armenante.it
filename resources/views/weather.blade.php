@extends('Layout/layout')

@section('title', 'Meteo -')

@section('content')

<div class="container">
    <h1>Meteo</h1>
    <br>
    <form action="/weather" method="POST">
        @csrf
        <input type="text" name="city" placeholder="Inserisci Città" required>
        <button type="submit">Cerca Meteo</button>
    </form>
    @if (isset($weather))
        <h2>{{ $weather['name'] }}</h2>
        <p>{{ $weather['weather'][0]['description'] }}</p>
        <p>{{ $weather['main']['temp'] }} &deg;C</p>
    @elseif (isset($error))
        <p class="error">{{ $error }}</p>
    @endif
</div>

@endsection

<link href="{{ asset('/css/weather.css') }}" rel="stylesheet">
