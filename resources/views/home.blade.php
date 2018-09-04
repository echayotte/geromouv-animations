@extends('layouts.layout')
@extends('layouts.app')

@section('content')
<div class="card-body">
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif
    <p>Vous êtes connectée !</p>
    <a class="btn btn--green" href="{{ route('member.index') }}">liste des inscrits</a>

@endsection
