@extends('layouts.layout')

@section('content')
@if (Auth::check())

    <div class="page-header">
        <h1>Plannings / Edit</h1>
    </div>
    <div class="row">
        <div class="registration-form">
            <form action="{{ action('PlanningAnimationController@update', $planningAnimation->id) }}" method="POST">
                @csrf
                @method('PUT')

                {{-- <input type="hidden" name="planning-animation-_method" value="PUT"> --}}
                {{-- <input type="hidden" name="planning-animation-_token" value="{{ csrf_token() }}"> --}}
                <div class="form-group">
                    <label for="nome">ID</label>
                    <p class="form-control-static">{{$planningAnimation->id}}</p>
                </div>
                <div class="form-group">
                     <label for="title">TITLE</label>
                     <input type="text" name="planning-animation-title" class="form-control" value="{{$planningAnimation->title}}"/>
                </div>
                    <div class="form-group">
                     <label for="start">START</label>
                     <input type="text" name="planning-animation-start" class="form-control" value="{{$planningAnimation->start}}"/>
                </div>
                    <div class="form-group">
                     <label for="end">END</label>
                     <input type="text" name="planning-animation-end" class="form-control" value="{{$planningAnimation->end}}"/>
                </div>
                    <div class="form-group">
                     <label for="is_all_day">IS_ALL_DAY</label>
                     <input type="text" name="planning-animation-day" class="form-control" value="{{$planningAnimation->is_all_day}}"/>
                {{-- </div>
                    <div class="form-group">
                     <label for="background_color">BACKGROUND_COLOR</label>
                     <input type="text" name="planning-animation-background_color" class="form-control" value="{{$planningAnimation->background_color}}"/>
                </div> --}}



            <a class="btn btn-default" href="{{ route('planning_animation.index') }}">Back</a>
            <button class="btn btn-primary" type="submit" >Save</button>
            </form>
        </div>
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
