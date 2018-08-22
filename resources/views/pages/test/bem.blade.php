@extends('layouts.layout')

@section('title')
    BEM
@endsection

@section('content')
<div class="main-content">
    {{-- <button class="link" href="/member/create">Inscription</button> --}}
    
    {{-- <label>button noclass: </label> --}}
    {{-- <button>button</button> --}}
    
    <label>button class: btn </label><br>
    <button class="btn">Inscription</button>
    <hr>
    <label>a class: btn </label><br>
    <a class="btn" href="/member/create">Inscription</a>
    <br>
    <label>a class: btn btn--white </label><br>
    <a class="btn btn--white" href="/member/create">Inscription</a>
    
    <p>
        &searrow;
    </p>
    {{-- <div class="entry-content">
        <label>a class.link: </label>
        <a class="link" href="/member/create">Inscription</a>

        <label>a class.button: </label>
        <a class="btn" href="/member/create">Inscription</a>
        
        <label>a class.button: </label>
        <a class="button--inverse" href="/member/create">Inscription</a>
    </div> --}}
</div>
<!-- .main-content -->
@endsection
