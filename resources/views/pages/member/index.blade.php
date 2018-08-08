@extends('layouts.layout')

@section('title')
    liste des inscrits
@endsection

@section('content')

    <ul>
        @foreach ($members as $member)
            <li>{{ $member->firstname}} {{ $member->lastname}}</li>
            <li>{{ $member->birthday}} {{ $member->city}}</li>
            <li>{{ $member->mutual->name}} {{ $member->pension->name}}</li>
        @endforeach
    </ul>

@endsection