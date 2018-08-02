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
                GEROMOUV' propose des activités destinés aux seniors désireux de pratiquer une activité physique adaptée à leur besoin.
            </p>

            <div class="cards">
                <div class="cards__card card">
                    <img class="card__img" src="/storage/images/pages/presentation/seances.jpg">
                    <div class="card__body">
                        <h3>Séances d'activités</h3>
                        <a href="#" id="btn-seances">Présentation</a>
                    </div>
                </div>

                <div class="cards__card card">
                    <img class="card__img" src="/storage/images/pages/presentation/stages.jpg">
                    <div class="card__body">
                        <h3>Stages</h3>
                        <a href="#" id="btn-stages">Présentation</a>
                    </div>
                </div>

                <div class="cards__card card">
                    <img class="card__img" src="/storage/images/pages/presentation/events.jpg">
                    <div class="card__body">
                        <h3>Événements</h3>
                        <a href="#" id="btn-events">Présentation</a>
                    </div>
                </div>
            </div>
            <!-- .cards -->
        </div>
        <!-- .entry-content -->
    </section>
    <hr>
    
    <div class="presentation-hidden" id="presentation-hidden">
        @include('pages.presentation.layouts.hidden')
    </div>

</div>
<!-- .main-content -->
@endsection