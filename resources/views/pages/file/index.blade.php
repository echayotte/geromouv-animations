<?php use Illuminate\Support\Facades\Input; ?>

@extends('layouts.layout')

@section('content')

    @foreach ($files as $file )
        <ul>
        <li>{{$file->id}} {{$file->name}}</li>
        </ul>
    @endforeach

@endsection