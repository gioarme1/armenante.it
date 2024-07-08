@extends('Layout/layout')

@section('title', 'To do List -')

@section('container')

    <h1 class="td">To do List</h1>

<div class="todolist">
    <input id="new-task" type="text" placeholder="Cosa vuoi inserire?">
    <button class="inserisci" id="new-task-btn">Inserisci</button>
    <button id="clear-btn">Pulisci</button>
    <div id="todo"></div>
</div>

    <script type="text/javascript" src="{!! asset('/js/todolist.js') !!}"></script>
    <link href="{{ asset('/css/todolist.css') }}" rel="stylesheet">

@endsection

