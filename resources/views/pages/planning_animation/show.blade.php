@extends('layout')

@section('content')
@if (Auth::check())
    <div class="page-header">
        <h1>Planning Animation / Show </h1>
    </div>

    <div class="row">
        <div class="col-md-12">

            <form action="#">
                <div class="form-group">
                    <label for="nome">ID</label>
                    <p class="form-control-static">{{$planningAnimation->id}}</p>
                </div>
                <div class="form-group">
                     <label for="title">TITLE</label>
                     <p class="form-control-static">{{$planningAnimation->title}}</p>
                </div>
                    <div class="form-group">
                     <label for="start">START</label>
                     <p class="form-control-static">{{$planningAnimation->start}}</p>
                </div>
                    <div class="form-group">
                     <label for="end">END</label>
                     <p class="form-control-static">{{$planningAnimation->end}}</p>
                </div>
                    <div class="form-group">
                     <label for="is_all_day">IS_ALL_DAY</label>
                     <p class="form-control-static">{{$planningAnimation->is_all_day}}</p>
                </div>
                    <div class="form-group">
                     <label for="background_color">BACKGROUND_COLOR</label>
                     <p class="form-control-static">{{$planningAnimation->background_color}}</p>
                </div>
            </form>



            <a class="btn btn-default" href="{{ route('planning_animation.index') }}">Back</a>
            <a class="btn btn-warning" href="{{ route('planning_animation.edit', $planningAnimation->id) }}">Edit</a>
            <form action="#/$planningAnimation->id" method="DELETE" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };"><button class="btn btn-danger" type="submit">Delete</button></form>
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