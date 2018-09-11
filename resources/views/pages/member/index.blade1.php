@extends('layouts.layout')

@section('title')
liste des inscrits
@endsection

@section('content')

<div class="content">
    <div class='f4b1'>
        <button  type="button" class="btn btn--green">Call Ajax</button>
    </div>
    <div>
        <ul class="ajax"></ul>
    </div>
</div>
@endsection

@section('js')
    <script src="{{ asset('js/ajax.js') }}"></script>
@endsection