<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ImageController extends Controller
{
    public function upload(Request $request)
    {
        // Validazione del file immagine
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $image = $request->file('image');
        $imagePath = $image->getPathName();

        // Invio dell'immagine all'API di visione (sostituisci con i dettagli della tua API)
        $response = Http::attach(
            'image', file_get_contents($imagePath), $image->getClientOriginalName()
        )->post('https://api.openai.com/v1/chat/completions', [
            'api_key' => 'Inserisci la tua API KEY',
        ]);

        // Estrazione dei dati dalla risposta dell'API
        $animals = $response->json();

        // Verifica del tipo di dati e conversione a stringa se necessario
        if (!is_array($animals)) {
            $animals = (array)$animals;
        }

        return view('result', ['animals' => $animals]);
    }
}
