@extends('layouts.layout')

@section('content')

<div class="card-body">

    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <p>Vous êtes connectée !</p>
    <a class="btn btn--green" href="{{ route('member.index') }}">liste des inscrits</a>
    <a class="btn btn--green" href="{{ route('mutual.index') }}">liste des complémentaires de santé</a>
    <a class="btn btn--green" href="{{ route('pension.index') }}">liste des caisses de retraites</a>

@endsection
