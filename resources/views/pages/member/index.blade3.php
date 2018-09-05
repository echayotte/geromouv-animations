@extends('layouts.layout')

@section('title')
liste des inscrits
@endsection

@section('content')
{{-- @if (Auth::check()) --}}

{{-- <div class="content">
    <div class='f4b1'>
        <button  type="button" class="btn btn--green">Call Ajax</button>
    </div>
    <div>
        <ul class="ajax"></ul>
    </div>
</div> --}}



<table>
    <tr>
        <th>Id</th>
        <th class="nom" style="cursor:pointer">Nom</th>
        <th>Prénom</th>
        <th>email</th>
        <th class="th-right">actions</th>
        {{-- <th>Id</th>
        <th>Nom <a>&uarr;</a> <a>&darr;</a></th>
        <th>Prénom &uarr; &darr;</th>
        <th>email &uarr; &darr;</th>
        <th class="th-right">actions &uarr; &darr;</th> --}}
    </tr>
    @foreach ($members as $member)
    <tr name="row" content="{{$member->id}}">
        <td class="id" content="{{$member->id}}">{{$member->id}}</td>
        <td class="lastname" content="{{$member->lastname}}">{{$member->lastname}}</td>
        <td class="firstname" content="{{$member->firstname}}">{{$member->firstname}}</td>
        <td class="email" content="{{$member->email}}">{{$member->email}}</td>
        <td class="table-right"><a class="btn btn--green btn--small" href="{{ route('member.show', $member->id) }}">Voir</a>
            <a class="btn btn--orange btn--small" href="{{ route('member.edit', $member->id) }}">Modifier</a>
            
            <form action="{{ action('MemberController@destroy', $member->id) }}" method="post" style="display: inline;" onsubmit="if(confirm('Vous êtes sur le point de supprimer \n {{ $member->lastname }} {{ $member->firstname }}.\n Êtes-vous sûr?')) { return true } else {return false };">
                @csrf
                @method("DELETE")
                <input class="btn btn--red btn--small" type="submit" id="submit" value="Supprimer" name="submit" style="display: inline;">
            </form>
        </td>
    </tr>
    @endforeach
</table>

{{ $members->links() }}
{{-- @else
<div class="main-content">
    <section>
        <header class="entry-header">
            <h3 class="entry-title">Vous n'avez pas accès à cette page, seul l'administrateur le peut</h3>
        </header>
    </section>
</div>
@endif --}}


@endsection

@section('js')
    <script src="{{ asset('js/ajax.js') }}"></script>
@endsection