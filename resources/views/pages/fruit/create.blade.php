@extends('layouts.layout')

@section('title')
liste des fruits
@endsection


@section('content')
<form METHOD="POST" action="{{ url('fruit') }}">
    @csrf
    <!-- load dropdown listform -->
    
    <select name="fruit" id="fruit">
        @foreach($fruits as $fruit)
        <option value="{{ $fruit->id }}">{{ $fruit->name}}</option>
        @endforeach
    </select>
    
    <!-- on click save and reload drop-down -->
    <br><br>
    Ajouter un fruit: <br>
    <input type="text" name="newFruit" id="newFruitId">
    <br><br>
    <button type="submit" name="addFruit" id="addFruitId">Ajouter</button>
    <span class='success'>Successful</span>
    <span class='error'>Error</span>
    
</form>
@endsection

@section('js')
    <script src="{{ asset('js/fruit.js') }}"></script>
@endsection