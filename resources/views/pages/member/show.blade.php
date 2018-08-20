@extends('layouts.layout')

@section('title')
    Demande d'inscription de: {{ $member->firstname }} {{ $member->lastname }}aux activités de Géromouv'
@endsection
 
@section('css')
    <link rel='stylesheet' href='/css/print.css' type='text/css' media='print' />
@endsection

@section('content')

    {{-- status to show the data completed in the DB --}}
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <p>
        Vérifiez les informations avant d'imprimer.
        Si tout est bon vous pouvez imprimer, sinon vous pouvez modifier ici.
    </p>
    <button>Imprimer</button>
    <a class="link" href="{{ route('member.edit', $member->id) }}">Modifier</a>
    <ul>
        <li><h5>Informations</h5></li>
        <li>Nom: {{ $member->lastname }}</li>
        <li>Prénom: {{ $member->firstname }}</li>
        <li>Date de naissance: {{ $formatDate }}</li>
        <li>Sexe: {{ $member->gender }}</li>
        <li><h5>Contact</h5></li>
        <li>Adresse: {{ $member->address }} - {{ $member->zipcode }} {{ $member->city }}</li>
        <li>Email: {{ $member->email }}</li>
        <li>N° de téléphone principal: {{ $member->primaryphone }}</li>
        <li>N° de téléphone secondaire: {{ $member->secondaryphone }}</li>
        <li><h5>Informations de santé</h5>
        <li>Complémentaire Santé: {{ $member->mutual->name }}</li>
        <li>Caisse de Retraite: {{ $member->pension->name }}</li>
        <li>Activités choisies:
            <ul>
                @foreach ($member->activities as $activity)
                    <li> {{ $activity->name}}</li>
                @endforeach
            </ul>
        </li>
    </ul>
    

@endsection
