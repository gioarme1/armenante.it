@extends('Layout/layout')

@section('title', 'Home -')

@section('content')

<h3>Ciao, mi chiamo Giovanni</h3>
<h2> Studio programmazione web.</h2>
    <hr>
<h4>Ho creato questa pagina dove ho inserito una serie di esercizi</h4>

@endsection

@section('container')



@endsection
<script type="text/javascript" src="{!! asset('/js/home.js') !!}"></script>
<link href="{{ asset('/css/home.css') }}" rel="stylesheet">

