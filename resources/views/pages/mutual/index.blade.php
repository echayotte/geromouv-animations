@extends('layouts.layout')

@section('title')
    liste des complémentaires de santé
@endsection

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
@endsection

@section('content')

@if (Auth::check())

    <div class="entry-content">
        {{-- status to show the data completed in the db --}}
        @if (session('message'))
            <p class="note">
                {{ session('message') }}
            </p>
        @endif

        <h2>Liste des complémentaires de santé</h2>
        <p class="return-admin">
            <a class="btn btn--grey" href="{{ URL::previous() }}">Retour</a>
        </p>
        {{-- use @sortable from [Kyslik\ColumnSortable\ColumnSortableServiceProvider] --}}
        <table>
            <tr>
                <th>@sortablelink('id', 'Id')</th>
                <th>@sortablelink('name', 'Nom')</th>
                <th class="th-right"></th>
            </tr>

            @if($mutuals->count())

                @foreach($mutuals as $key => $mutual)

                    <tr>
                        <td>{{ $mutual->id }}</td>
                        <td>{{ $mutual->name }}</td>
                        <td class="table-right">
                            {{-- <a class="btn btn--green btn--small" href="{{ route('mutual.show', $mutual->id) }}">Voir</a> --}}
                            {{-- <a class="btn btn--orange btn--small" href="{{ route('mutual.edit', $mutual->id) }}">Modifier</a> --}}
                            
                            <form action="{{ 
                                action('MutualController@destroy', $mutual->id) }}"
                                method="post" style="display: inline;"
                                onsubmit="if(confirm('Vous êtes sur le point de supprimer \n {{ $mutual->name }}.\n Êtes-vous sûr?')) { return true } else {return false };">
                                @csrf
                                @method("DELETE")
                                <input class="btn btn--red btn--small" type="submit" id="submit" value="Supprimer" name="submit" style="display: inline;">
                            </form>
                        </td>
                    </tr>

                @endforeach

            @endif

        </table>

        {{-- paginate with [Kyslik\ColumnSortable\ColumnSortableServiceProvider] --}}
        <div class="parent-pagination">
            {!! $mutuals->appends(\Request::except('page'))->render() !!}
        </div>
    </div>
@else
    <div class="main-content">
        <section>
            <header class="entry-header">
                <h3 class="entry-title">Vous n'avez pas accès à cette page, seul l'administrateur le peut</h3>
            </header>
        </section>
    </div>
@endif

@endsection
