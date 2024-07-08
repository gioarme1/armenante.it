@extends('Layout/layout')

@section('title', 'Generatore di PSW -')

@section('container')


<h1>Generatore di Password complesse</h1>

<div>
    <label for="lunghezza">Lunghezza</label>
    <input type="number" id="lunghezza"min="5" max="20" value="10">
</div>
<div>
    <label for="caratteri-minuscoli">Caratteri Minuscoli</label>
    <input type="checkbox" id="caratteri-minuscoli" checked>
</div>
<div>
    <label for="caratteri-maiuscoli">Caratteri Maiuscoli</label>
    <input type="checkbox" id="caratteri-maiuscoli" checked>
</div>
<div>
    <label for="caratteri-numerici">Caratteri Numerici</label>
    <input type="checkbox" id="caratteri-numerici" checked>
</div>
<div>
    <label for="caratteri-speciali">Caratteri Speciali</label>
    <input type="checkbox" id="caratteri-speciali" checked>
</div>
<button id="genera-btn">Genera Password</button>
<div id="risultato_psw"></div>

<script type="text/javascript" src="{!! asset('js/generapsw.js') !!}"></script>
<link href="{{ asset('/css/generapsw.css') }}" rel="stylesheet">

@endsection


