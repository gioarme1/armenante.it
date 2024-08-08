<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    public function index()
    {
        return view('weather');
    }

    public function getWeather(Request $request)
    {
        $city = $request->input('city');
        $apiKey = 'Inserire la API_KEY';
        $response = Http::get("http://api.openweathermap.org/data/2.5/weather?q={$city}&appid={$apiKey}&units=metric");

        if ($response->successful()) {
            $data = $response->json();
            return view('weather', ['data' => $data]);
        } else {
            return view('weather', ['error' => 'Città non trovata']);
        }
    }
}
