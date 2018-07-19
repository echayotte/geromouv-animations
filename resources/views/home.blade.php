@extends('layouts.layout')

@section('content')
    <article class="page">
        <header class="entry-header">
            <h1 class="entry-title">Site Géromouv' - Animations</h1>
        </header>
        <!-- .entry-header -->

        <div class="entry-content">
                <a href="{{ url('/welcome') }}">Welcome Laravel</a> | 
                <a href="{{ url('/article') }}">Article Géromouv</a> | 
                <a href="{{ url('/presentation') }}">Présentation</a> | 
                <a href="{{ url('/inscription') }}">Inscription</a> |  
                <a href="{{ url('/animations') }}">Animations</a> | 
                <a href="{{ url('/template') }}">Template</a> | 
        </div>
        <!-- .entry-content -->
    </article>
@endsection
