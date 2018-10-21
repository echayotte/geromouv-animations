@extends('layouts.layout')

@section('title')
liste des caisses de retraite
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
        <h2>Liste des caisses de retraite</h2>
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

            @if($pensions->count())

                @foreach($pensions as $key => $pension)

                    <tr>
                        <td>{{ $pension->id }}</td>
                        <td>{{ $pension->name }}</td>
                        <td class="table-right">
                            {{-- <a class="btn btn--green btn--small" href="{{ route('pension.show', $pension->id) }}">Voir</a> --}}
                            {{-- <a class="btn btn--orange btn--small" href="{{ route('pension.edit', $pension->id) }}">Modifier</a> --}}
                            
                            <form action="{{ action('PensionController@destroy', $pension->id) }}"
                                method="post" style="display: inline;"
                                onsubmit="if(confirm('Vous êtes sur le point de supprimer \n {{ $pension->name }}.\n Êtes-vous sûr?')) { return true } else {return false };">
                                @csrf
                                @method("DELETE")
                                <input class="btn btn--red btn--small" type="submit" id="submit" value="Supprimer" name="submit" style="display: inline;">
                            </form>
                        </td>
                    </tr>

                @endforeach

            @endif

        </table>
        
        <div class="parent-pagination">
            {{-- paginate with [Kyslik\ColumnSortable\ColumnSortableServiceProvider] --}}
            {!! $pensions->appends(\Request::except('page'))->render() !!}
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
