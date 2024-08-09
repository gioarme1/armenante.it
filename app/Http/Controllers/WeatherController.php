<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    public function getWeather(Request $request)
    {
        $city = $request->input('city', 'Rome'); // città di default è Roma
        $apiKey = env('OPENWEATHER_API_KEY');

        $response = Http::get("https://api.openweathermap.org/data/2.5/weather?q={$city}&appid={$apiKey}&units=metric");

        if ($response->successful()) {
            $weatherData = $response->json();
            return view('weather', ['weather' => $weatherData]);
        } else {
            return view('weather', ['error' => 'Impossibile ottenere le informazioni meteo.']);
        }
    }
}
