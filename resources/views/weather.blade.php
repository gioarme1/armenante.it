@extends('Layout/layout')

@section('title', 'Meteo -')

@section('content')

<div class="container">
    <h1>Meteo</h1>

    <form method="GET" action="{{ route('weather') }}">
        <label for="city">Inserisci una città:</label>
        <input type="text" id="city" name="city" placeholder="Rome">
        <button type="submit">Vedi Meteo</button>
    </form>

    @if (isset($weather))
        <h2>Meteo per {{ $weather['name'] }}</h2>
        <p>Temperatura: {{ $weather['main']['temp'] }}°C</p>
        <p>Condizioni: {{ $weather['weather'][0]['description'] }}</p>
    @elseif (isset($error))
        <p>{{ $error }}</p>
    @endif
</div>

@endsection

<link href="{{ asset('/css/weather.css') }}" rel="stylesheet">
