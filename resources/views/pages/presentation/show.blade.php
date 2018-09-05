@extends('layouts.layout')

@section('title')
    Inscription et présentation
@endsection

@section('content')
<div class="main-content">
    @include('layouts.partials.backToTop')
    
    <section>
        <header class="entry-header">
            <h1 class="entry-title">Les animations de GEROMOUV'</h1>
        </header>
        <!-- .entry-header -->

        <div class="entry-content">
            <p>
                GEROMOUV' propose des activités destinées aux seniors désireux de pratiquer une activité physique adaptée à leur besoin.
            </p>

            <div class="cards">
                <div class="cards__card card">
                    <img class="card__img" src="/storage/images/pages/presentation/seances.jpg">
                    <div class="card__body">
                        <h3>Séances d'activités</h3>
                        <button class="btn btn--white" id="btn-seances">Présentation</button>
                    </div>
                </div>

                <div class="cards__card card">
                    <img class="card__img" src="/storage/images/pages/presentation/stages.jpg">
                    <div class="card__body">
                        <h3>Stages</h3>
                        <button class="btn btn--white" id="btn-stages">Présentation</button>
                    </div>
                </div>

                <div class="cards__card card">
                    <img class="card__img" src="/storage/images/pages/presentation/events.jpg">
                    <div class="card__body">
                        <h3>Événements</h3>
                        <button class="btn btn--white" id="btn-events">Présentation</button>
                    </div>
                </div>
            </div>
            <!-- .cards -->
        </div>
        <!-- .entry-content -->
    </section>

    <div class="presentation-hidden" id="presentation-seances">@include('pages.presentation.partials.seances')</div>
    <div class="presentation-hidden" id="presentation-stages">@include('pages.presentation.partials.stages')</div>
    <div class="presentation-hidden" id="presentation-events">@include('pages.presentation.partials.events')</div>
    
    <hr>
    <div id="presentation-contact">@include('pages.presentation.partials.contact')</div>
</div>
<!-- .main-content -->
@endsection

@section('js')
	<script src="{{ asset('js/presentation.js') }}"></script>
@endsection