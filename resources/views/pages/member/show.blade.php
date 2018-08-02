@extends('layouts.layout')

@section('title')
    liste des inscrits
@endsection

{{-- section to show the data completed in the DB --}}


@section('content')

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <p>
        Vérifiez les informations avant d'imprimer.
        Si tout est bon vous pouvez imprimer, sinon vous pouvez modifier ici.
    </p>
    <button>Modifier</button>
    <ul>
        <li><h5>Informations</h5></li>
        <li>Nom: {{ $member->mem_last_name }} Prénom: {{ $member->mem_first_name }}</li>
        <li>Date de naissance: {{ $member->mem_date_of_birth }}, Sexe: {{ $member->mem_gender }}</li>
        <li><h5>Contact</h5></li>
        <li>Adresse: {{ $member->mem_address }} - {{ $member->mem_zipcode }} {{ $member->mem_city }}</li>
        <li>Email: {{ $member->mem_email }}</li>
        <li>N° de téléphone fixe: {{ $member->mem_phone }}</li>
        <li>N° de téléphone portable: {{ $member->mem_cellphone }}</li>
        <li><h5>Informations de santé</h5>
        <li>Complémentaire Santé: {{ $member->complementary_health->com_name }}</li>
        <li>Caisse de Retraite: {{ $member->pension_fund->pen_name }}</li>
        {{-- <li>Activités choisies: {{ $member-> }}</li> --}}
    </ul>
@endsection
