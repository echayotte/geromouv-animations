@extends('layouts.layout')

@section('title')
Plannings
@endsection


@section('content')
@if (Auth::check())

<div class="main-content">
    @include('layouts.partials.backToTop')
    <section class="large-width">
        <header class="entry-header">
            <h1 class="entry-title">Planning</h1>
        </header>
        <!-- .entry-header -->
        
        <div class="entry-content">
            <div>
                <div>
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Titre</th>
                                <th>Début</th>
                                <th>Fin</th>
                                <th>Toute la journée</th>
                                <th>Animation</th>
                                <th>couleur de Fond</th>
                                <th>Options</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            
                            @foreach($planningAnimations as $planningAnimation)
                            <tr>
                                <td>{{$planningAnimation->id}}</td>
                                <td>{{$planningAnimation->title}}</td>
                                <td>{{$planningAnimation->start}}</td>
                                <td>{{$planningAnimation->end}}</td>
                                <td>{{$planningAnimation->is_all_day}}</td>
                                {{-- <td>{{$planningAnimation->animation}}</td>
                                <td>{{$planningAnimation->background_color}}</td> --}}
                                
                                <td>
                                    <a class="btn btn--green" href="{{ route('planning_animation.show', $planningAnimation->id) }}">View</a>
                                    <a class="btn btn--orange " href="{{ route('planning_animation.edit', $planningAnimation->id) }}">Edit</a>
                                    <form action="{{ route('planning_animation.destroy', $planningAnimation->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button class="btn btn--red" type="submit">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            
                            @endforeach
                            
                        </tbody>
                    </table>
                    {{-- <a class="btn btn--orange" href="{{ route('member.edit', $member->id) }}">Modifier</a> --}}
                    
                    <a class="btn btn--orange" href="{{ route('planning_animation.create') }}">Create</a>
                </div>
            </div>
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