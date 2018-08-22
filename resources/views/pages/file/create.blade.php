<?php
use Illuminate\Support\Facades\Input;
?>
@extends('layouts.layout')

@section('content')
<div class="main-content">
    <section>
        <div class="registration-form">
            <form action="{{ action('FileController@store') }}" method="post">
                @csrf
                
                <div class="row">
                    <div class="col-30">
                        <label for="file-name">Name</label>
                    </div>
                    <div class="col-65">
                        <input type="text"name="name" placeholder="votre nom.." value="{{ old('name') }}">
                    </div>
                </div>
                
                <div>
                    <input type="submit" id="submit" value="Envoyer" name="submit">
                </div>
                
            </form>
        </div>
    </section>
</div>
@endsection
