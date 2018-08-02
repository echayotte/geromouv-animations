@extends('layouts.layout')

@section('title')
    liste des inscrits
@endsection

@section('content')

    <ul>
        @foreach ($members as $member)
            <li>{{ $member->mem_first_name}} {{ $member->mem_last_name}}</li>
            <li>{{ $member->mem_date_of_birth}} {{ $member->mem_city}}</li>
        @endforeach
    </ul>

@endsection