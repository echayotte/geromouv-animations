@extends('layouts.layout')

@section('content')
@if (Auth::check())
<div class="main-content">
    <section>
        <header class="entry-header">
            <h1 class="entry-title">Créer une animation</h1>
        </header>
        <!-- .entry-header -->
    </section>
    <section>
        <div class="registration-form">
            <form action="{{ action('PlanningAnimationController@store') }}" method="POST">
                @csrf
                
                <div class="row">
                    <div class="col-30">
                        <label for="planning-animation-title">Titre <span class="mandatory">*</span></label>
                    </div>
                    <div class="col-65">
                        <input type="text" id="planning-animation-title" name="planning-animation-title" placeholder="Titre..." value="{{ old('planning-animation-title') }}">
                        @if($errors->has('planning-animation-title'))
                        <p class="error")>{{ $errors->first('planning-animation-title') }}</p>
                        @endif
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-30">
                        <label for="planning-animation-start">Date de début <span class="mandatory">*</span></label>
                    </div>
                    <div class="col-65">
                        <input type="text" id="planning-animation-start" name="planning-animation-start" placeholder="Date de début : yyyy-mm-dd hh:mm:ss ..." value="{{ old('planning-animation-start') }}">
                        @if($errors->has('planning-animation-start'))
                        <p class="error")>{{ $errors->first('planning-animation-start') }}</p>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-30">
                        <label for="planning-animation-end">Date de fin <span class="mandatory">*</span></label>
                    </div>
                    <div class="col-65">
                        <input type="text" id="planning-animation-end" name="planning-animation-end" placeholder="Date de fin : yyyy-mm-dd hh:mm:ss ..." value="{{ old('planning-animation-end') }}">
                        @if($errors->has('planning-animation-end'))
                        <p class="error")>{{ $errors->first('planning-animation-end') }}</p>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-30">
                        <label for="planning-animation-day">Toute la journée <span class="mandatory">*</span></label>
                    </div>
                    <div class="col-65">
                        <input type="text" id="planning-animation-day" name="planning-animation-day" placeholder="1: oui, 0: non..." value="{{ old('planning-animation-day') }}">
                        @if($errors->has('planning-animation-day'))
                        <p class="error")>{{ $errors->first('planning-animation-day') }}</p>
                        @endif
                    </div>
                </div>
                {{-- <div class="row">
                    <div class="col-30">
                        <label for="planning-animation-animation">Animation <span class="mandatory">*</span></label>
                    </div>
                    <div class="col-65">
                        <input type="text" id="planning-animation-animation" name="planning-animation-animation" placeholder="Séance, Stage ou Événement ..." value="{{ old('planning-animation-animation') }}">
                        @if($errors->has('planning-animation-animation'))
                        <p class="error")>{{ $errors->first('planning-animation-animation') }}</p>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-30">
                        <label for="planning-animation-color">Couleur de fond <span class="mandatory">*</span></label>
                    </div>
                    <div class="col-65">
                        <input type="text" id="planning-animation-color" name="planning-animation-color" placeholder="adhérent: vert, non adhérent: orange ..." value="{{ old('planning-animation-color') }}">
                        @if($errors->has('planning-animation-color'))
                        <p class="error")>{{ $errors->first('planning-animation-color') }}</p>
                        @endif
                    </div>
                </div> --}}
                <div>
                    <a class="btn" href="{{ route('planning_animation.index') }}">Retour</a>
                    <input class="btn" type="submit" value="Créer" name="submit">
                </div>
            </form>
        </div>
    </section>
</div>
@else
<div class="main-content">
    <section>
        <header class="entry-header">
            <h3 class="entry-title">Vous n'avez pas accès à cette page</h3>
        </header>
        <!-- .entry-header -->
    </section>
</div>
@endif
@endsection