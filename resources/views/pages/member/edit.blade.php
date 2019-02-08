<?php
use Illuminate\Support\Facades\Input;
?>
@extends('layouts.layout')

@section('title')
    Formulaire d'inscription à Geromouv'
@endsection

@section('content')
<div class="main-content">
    @include('layouts.partials.backToTop')
    <section>
        <header class="entry-header">
            <h1 class="entry-title">Formulaire d'inscription à Géromouv'</h1>
        </header>
        <!-- .entry-header -->

        <div class="entry-content">
            <p>
                Afin de profiter des animations de Géromouv' du Grand Cahors, veuillez vous inscrire à l'aide de ce formulaire.
            <br>
                <strong>À retourner dûment complété, Accompagné du certificat médical et du paiement</strong>
            <p>
                <ol>
                    <h5>Les étapes d'inscription :</h5>
                    <li>Le remplir en ligne</li>
                    <li>L'imprimer</li>
                    <li>Faire remplir et signer le certificat médical l'accompagnant par son médecin traitant</li>
                    <li>Établir un chèque de <strong>xx€</strong> à l'ordre de Géromouv'</li>
                    <li>L' envoyer à l'adresse : <strong><em>Géromouv', Lieu dit Salgues - 46090 Labastide-Marnhac</em></strong></li>
                    <li>Vous serez contacté par un membre de Géromouv' à la validation de votre inscription</li>
                </ol>
            </p>
            <p class="note">
                Si vous éprouvez des difficultés à le remplir en ligne, veuillez contacter <strong>Christine</strong> qui se chargera de le remplir avec vous par téléphone: <strong>xx xx xx xx</strong>
            </p>
        </div>
        <!-- .entry-content -->
    </section>

    <section>
        <div class="registration-form">
            <form action="{{ action('MemberController@update', $member->id) }}" method="POST">
                @csrf
                @method('PATCH')
                <p>
                    <strong>
                        Les champs marqués avec un astérisque <span class="mandatory">*</span> sont <span class="mandatory">obligatoires</span>
                    </strong>
                    <br>
                    <em>
                        En remplissant et validant ce formulaire vous acceptez que vos données personnelles soient enregistrées dans une base de données | plus d'informations: 
                        <a href="http://géromouv-animations/protection-des-donnees" title="Protection des données personnelles"> politique de protection des données personnelles</a>
                    </em>
                </p>

                {{-- lastname --}}
                <div class="row">
                    <div class="col-30">
                        <label for="member-lastname">Nom <span class="mandatory">*</span></label>
                    </div>
                    <div class="col-65">
                        <input type="text" id="member-lastname" name="member-lastname" placeholder="votre nom.." value="{{ $member->lastname }}">
                        @if($errors->has('member-lastname'))
                            <p class="error")>{{ $errors->first('member-lastname') }}</p>
                        @endif
                    </div>
                </div>

                {{-- firstname --}}
                <div class="row">
                    <div class="col-30">
                        <label for="member-firstname">Prénom <span class="mandatory">*</span></label>
                    </div>
                    <div class="col-65">
                        <input type="text" id="member-firstname" name="member-firstname" placeholder="votre prénom.." value="{{ $member->firstname }}">
                        @if($errors->has('member-firstname'))
                            <p class="error")>{{ $errors->first('member-firstname') }}</p>
                        @endif
                    </div>
                </div>

                {{-- birthday --}}
                <div class="row">
                    <div class="col-30">
                        <label for="datepicker">Date de naissance <span class="mandatory">*</span></label>
                    </div>
                    <div class="col-65">
                        <input type="text" id="datepicker" name="member-birthday" placeholder="Votre date de naissance.." value="{{ $formatDate }}">
                        @if($errors->has('member-birthday'))
                            <p class="error">{{ $errors->first('member-birthday') }}</p>
                        @endif
                    </div>
                </div>

                {{-- gender --}}
                <div class="row">
                    <div class="col-30">
                        <label for="member-gender">Sexe <span class="mandatory">*</span></label>
                    </div>
                    <div class="col-65">
                        <label for="mmeber-gender">Homme</label>
                        <input type="radio" id="member-gender" name="member-gender" value="Homme" {{ $member->gender === 'Homme' ? 'checked' : '' }}>
                        
                        <label for="member-gender">Femme</label>
                        <input type="radio" id="member-gender" name="member-gender" value="Femme" {{ $member->gender === 'Femme' ? 'checked' : '' }}>

                        @if($errors->has('member-gender'))
                            <p class="error")>{{ $errors->first('member-gender') }}</p>
                        @endif
                    </div>
                </div>

                {{-- address --}}
                <div class="row">
                    <div class="col-30">
                        <label for="member-address">Adresse <span class="mandatory">*</span></label>
                    </div>
                    <div class="col-65">
                        <input type="text" id="member-address" name="member-address" placeholder="votre numéro et nom de rue.." value="{{ $member->address }}">
                        @if($errors->has('member-address'))
                            <p class="error")>{{ $errors->first('member-address') }}</p>
                        @endif
                    </div>
                </div>
                
                {{-- zipcode --}}
                <div class="row">
                    <div class="col-30">
                        <label for="member-zipcode">Code Postal <span class="mandatory">*</span></label>
                    </div>
                    <div class="col-65">
                        <input type="text" id="member-zipcode" name="member-zipcode" placeholder="votre code postal.." value="{{ $member->zipcode }}">
                        @if($errors->has('member-zipcode'))
                            <p class="error")>{{ $errors->first('member-zipcode') }}</p>
                        @endif
                    </div>
                </div>

                {{-- city --}}
                <div class="row">
                    <div class="col-30">
                        <label for="member-city">Ville <span class="mandatory">*</span></label>
                    </div>
                    <div class="col-65">
                        <input type="text" id="member-city" name="member-city" placeholder="votre ville.." value="{{ $member->city }}">
                        @if($errors->has('member-city'))
                            <p class="error")>{{ $errors->first('member-city') }}</p>
                        @endif
                    </div>
                </div>

                {{-- email --}}
                <div class="row">
                    <div class="col-30">
                        <label for="member-email">Email <span class="mandatory">*</span></label>
                    </div>
                    <div class="col-65">
                        <input type="email" id="member-email" name="member-email" placeholder="votre email.." value="{{ $member->email }}">
                        @if($errors->has('member-email'))
                            <p class="error")>{{ $errors->first('member-email') }}</p>
                        @endif
                    </div>
                </div>

                {{-- primaryphone --}}
                <div class="row">
                    <div class="col-30">
                        <label for="member-primaryphone">N° de téléphone principal <span class="mandatory">*</span></label>
                    </div>
                    <div class="col-65">
                        <input type="text" id="member-primaryphone" name="member-primaryphone" placeholder="votre numéro principal.." value="{{ $member->primaryphone }}">
                        @if($errors->has('member-primaryphone'))
                            <p class="error")>{{ $errors->first('member-primaryphone') }}</p>
                        @endif
                    </div>
                </div>

                {{-- secondaryphone --}}
                <div class="row">
                    <div class="col-30">
                        <label for="member-secondaryphone">N° de téléphone secondaire</label>
                    </div>
                    <div class="col-65">
                        <input type="text" id="member-secondaryphone" name="member-secondaryphone" placeholder="votre numéro secondaire.." value="{{ $member->secondaryphone }}">
                    </div>
                </div>

                {{-- mutual --}}
                <div class="row">
                    <div class="col-30">
                        <label for="member-mutual">Complémentaire Santé <span class="mandatory">*</span></label>
                    </div>
                    <div class="col-65">
                        <div id="ajax-mutual"></div>
                        <select id="member-mutual" name="member-mutual">
                            @foreach ($mutuals as $mutual)
                                @if ($member->mutual->id === $mutual->id)
                                    <option value="{{ $mutual->id }}" selected>{{ $mutual->name }}</option>
                                @else
                                    <option value="{{ $mutual->id }}">{{ $mutual->name }}</option>
                                @endif
                            @endforeach
                        </select>
                        @if($errors->has('member-mutual'))
                        <p class="error")>{{ $errors->first('member-mutual') }}</p>
                        @endif

                        <div id="removeMutualIfSuccess">
                            <input type="text" id="member-new-mutual" name="member-new-mutual" placeholder="Ajouter la vôtre si pas dans la liste.." value="{{ old('member-new-mutual') }}">
                            <button  class="btn btn--green btn--small add-new-mutual" type="button">Ajouter</button>
                        </div>
                    </div>
                </div>

                {{-- pension─ --}}
                <div class="row">
                    <div class="col-30">
                        <label for="member-pension">Caisse de Retraite <span class="mandatory">*</span></label>
                    </div>
                    <div class="col-65">
                        <div id="ajax-pension"></div>
                        <select id="member-pension" name="member-pension">
                            @foreach ($pensions as $pension)
                                @if($member->pension->id === $pension->id)
                                    <option value="{{ $member->pension->id }}" selected>{{ $member->pension->name }}</option>
                                @else
                                    <option value="{{ $pension->id }}">{{ $pension->name }}</option>
                                @endif
                            @endforeach
                        </select>
                        @if($errors->has('member-pension'))
                            <p class="error")>{{ $errors->first('member-pension') }}</p>
                        @endif

                        <div id="removePensionIfSuccess">
                            <input type="text" id="member-new-pension" name="member-new-pension" placeholder="Ajouter la vôtre si pas dans la liste.." value="{{ old('member-new-pension') }}">
                            <button  class="btn btn--green btn--small add-new-pension" type="button">Ajouter</button>
                        </div>
                                                
                    </div>
                </div>

                {{-- activities  --}}
                <div class="row">
                    <div class="col-30">
                        <label>Activités choisies <span class="mandatory">*</span></label>
                    </div>
                    <div class="col-65">
                        @foreach ($activities as $activity)
                            <label>
                                @if ($member->activities->contains($activity))
                                    <input type="checkbox" checked name="member-activities[]" value="{{$activity->id}}">{{$activity->name}}
                                @else
                                    <input type="checkbox" name="member-activities[]" value="{{$activity->id}}">{{$activity->name}}
                                @endif
                            </label>
                            <br>
                            @if($errors->has('member-activities'))
                                <p class="error")>{{ $errors->first('member-activities') }}</p>
                            @endif
                        @endforeach
                    </div>
                </div>
                
                {{-- submit button --}}
                <div>
                    <input class="btn" type="submit" id="submit" value="Envoyer" name="submit">
                </div>
            </form>
        </div>
    </section>
</div>
@endsection

@section('js')
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
	<script src="{{ asset('js/datepicker.js') }}"></script>

    {{-- ajax request --}}
    <script src="{{ asset('js/addMutual.js') }}"></script>
    <script src="{{ asset('js/addPension.js') }}"></script>
@endsection
<!-- .main-content -->