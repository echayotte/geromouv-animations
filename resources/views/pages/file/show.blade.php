@extends('layouts.layout')

@section('content')
  
    <a class="link" href="{{ route('file.edit', $file->id) }}">Modifier</a>
    <ul>
        <li>id {{ $file->id }} : {{ $file->name }}</li>
    </ul>

@endsection
