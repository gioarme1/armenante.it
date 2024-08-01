@extends('Layout/layout')

@section('title', 'To do List -')

@section('container')

    <div class="container">
        <h1>Upload Image</h1>
        <form action="{{ route('upload') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="file" name="image" accept="image/*" required>
            <button type="submit">Upload</button>
        </form>
        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>

    <link href="{{ asset('/css/upload.css') }}" rel="stylesheet">

@endsection
