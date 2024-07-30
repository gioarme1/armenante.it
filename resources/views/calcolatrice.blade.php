@extends('Layout/layout')

@section('title', 'To do List -')

@section('container')
<h1>Calcolatrice</h1>
<div class="calculator">
    <div class="display" id="display">0</div>
    <div class="buttons">
        <button class="btn" onclick="clearDisplay()">C</button>
        <button class="btn" onclick="appendToDisplay('/')">/</button>
        <button class="btn" onclick="appendToDisplay('*')">*</button>
        <button class="btn" onclick="appendToDisplay('-')">-</button>
        <button class="btn" onclick="appendToDisplay('7')">7</button>
        <button class="btn" onclick="appendToDisplay('8')">8</button>
        <button class="btn" onclick="appendToDisplay('9')">9</button>
        <button class="btn" onclick="appendToDisplay('+')">+</button>
        <button class="btn" onclick="appendToDisplay('4')">4</button>
        <button class="btn" onclick="appendToDisplay('5')">5</button>
        <button class="btn" onclick="appendToDisplay('6')">6</button>
        <button class="btn" onclick="calculateResult()">=</button>
        <button class="btn" onclick="appendToDisplay('1')">1</button>
        <button class="btn" onclick="appendToDisplay('2')">2</button>
        <button class="btn" onclick="appendToDisplay('3')">3</button>
        <button class="btn" onclick="appendToDisplay('.')">.</button>
        <button class="btn" onclick="appendToDisplay('')"></button>
        <button class="btn" onclick="appendToDisplay('0')">0</button>
        <button class="btn" onclick="appendToDisplay('')"></button>
        <button class="btn" onclick="appendToDisplay('')"></button>

    </div>
</div>

<script type="text/javascript" src="{!! asset('/js/calcolatrice.js') !!}"></script>
<link href="{{ asset('/css/calcolatrice.css') }}" rel="stylesheet">

@endsection
