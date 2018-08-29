@extends('layouts.layout')

@section('content')
    {!! $planning->calendar() !!}
@stop

@section('scripts')
    {!! $planning->script() !!}
@stop