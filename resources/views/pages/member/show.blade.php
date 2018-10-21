
@extends('layouts.layout')

@section('title')
Demande d'inscription de {{ $member->firstname }} {{ $member->lastname }}
@endsection

@section('content')
<div class="main-content">
    @include('layouts.partials.backToTop')
    <section>
        <header class="entry-header">
            <h1 class="entry-title">Informations renseignées</h1>
        </header>
        <!-- .entry-header -->
        
        <div class="entry-content">
            {{-- status to show the data completed in the db --}}
            @if (session('status'))
            <p class="note">
                {{ session('status') }}
            </p>
            @endif
            <p>
                <button class="btn btn--green" id="btn-print">Imprimer</button>
                <a class="btn btn--orange" href="{{ route('member.edit', $member->id) }}">Modifier</a>
                @if (Auth::check())
                <a class="btn btn--grey" href="{{ URL::previous() }}">Retour</a>
                @endif
            </p>
        </div>
    </section>
    <section>
        <div class="entry-content showflex">
            <div class="showflex__item">
                <ul class="list">
                    <li class="list__items items">
                        <ul class="items__sub-items sub-items">
                            <li class="sub-items__title">Contact</li>
                            <li class="sub-items__text"><span>Nom:</span> {{ $member->lastname }}</li>
                            <li class="sub-items__text"><span>Prénom:</span> {{ $member->firstname }}</li>
                            <li class="sub-items__text"><span>Date de naissance:</span> {{ $formatDate }}</li>
                            <li class="sub-items__text"><span>Sexe:</span> {{ $member->gender }}</li>
                            <li class="sub-items__text"><span>Adresse:</span> {{ $member->address }} - {{ $member->zipcode }} {{ $member->city }}</li>
                            <li class="sub-items__text"><span>Email:</span> {{ $member->email }}</li>
                            <li class="sub-items__text"><span>N° de téléphone principal:</span> {{ $member->primaryphone }}</li>
                            <li class="sub-items__text"><span>N° de téléphone secondaire:</span> {{ $member->secondaryphone }}</li>
                        <ul>
                    </li>
                </ul>
            </div>
            <div>
                <ul class="list">
                    <li class="list__items items">
                        <ul class="items__sub-items sub-items">
                            <li class="sub-items__title">Informations complémentaires</li>
                            <li class="sub-items__text"><span>Complémentaire Santé:</span> {{ $member->mutual->name }}</li>
                            <li class="sub-items__text"><span>Caisse de Retraite:</span> {{ $member->pension->name }}</li>
                            <li class="sub-items__text"><span>Activités choisies:</span>
                                <ul class="items__sub-items sub-items">
                                    @foreach ($member->activities as $activity)
                                    <li class="sub-items__text">&checkmark; {{ $activity->name}}</li>
                                    @endforeach
                                </ul>
                            </li>
                        <ul>
                    </li>
                </ul>
            </div>  
        </div>
        
    </section>
</div>
@endsection

@section('js')
<script>
    var btnPrint = document.getElementById('btn-print');
    
    btnPrint.addEventListener('click',function() {
        window.print();
    });
</script>
@endsection