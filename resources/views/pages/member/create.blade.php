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
                        <li>Établir un chèque de <strong>100€</strong> à l'ordre de Géromouv'</li>
                        <li>L' envoyer à l'adresse : <strong><em>Géromouv', Lieu dit Salgues - 46090 Labastide-Marnhac</em></strong></li>
                        <li>Vous serez contacté par un membre de Géromouv' à la validation de votre inscription</li>
                    </ol>
                </p>
                <p class="note">
                    Si vous éprouvez des difficultés à le remplir en ligne, veuillez contacter <strong>Christine</strong> qui se chargera de le remplir avec vous par téléphone: <strong>06 16 07 86 53</strong>
                </p>
            </div>
            <!-- .entry-content -->
        </section>

        <section>
            <div class="registration-form">
                <form action="{{ action('MemberController@store') }}" method="post">
                    @csrf
                    <p>
                        <strong>
                            Les champs marqués avec un astérisque <span class="mandatory">*</span> sont <span class="mandatory">obligatoires</span>
                        </strong>
                        <br>
                        <em>
                            En remplissant et validant ce formulaire vous acceptez que vos données personnelles soient enregistrées dans une base de données | plus d'informations: 
                            <a href="http://geromouv-animations/protection-des-donnees" title="Protection des données personnelles"> politique de protection des données personnelles</a>
                        </em>
                    </p>
                    {{-- lastname --}}
                    <div class="row">
                        <div class="col-30">
                            <label for="member-lastname">Nom <span class="mandatory">*</span></label>
                        </div>
                        <div class="col-65">
                            <input type="text" id="member-lastname" name="member-lastname" placeholder="votre nom.." value="{{ old('member-lastname') }}">
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
                            <input type="text" id="member-firstname" name="member-firstname" placeholder="votre prénom.." value="{{ old('member-firstname') }}">
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
                            <input type="text" id="datepicker" name="member-birthday" placeholder="Votre date de naissance.." value="{{ old('member-birthday') }}">
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
                            <input type="radio" id="member-gender" name="member-gender" value="Homme" @if(Input::old('member-gender')) checked @endif>
                            
                            <label for="member-gender">Femme</label>
                            <input type="radio" id="member-gender" name="member-gender" value="Femme" @if(!Input::old('member-gender')) checked @endif>

                            @if($errors->has('member-gender'))
                                <p class="error">{{ $errors->first('member-gender') }}</p>
                            @endif
                        </div>
                    </div>
                    {{-- address --}}
                    <div class="row">
                        <div class="col-30">
                            <label for="member-address">Adresse <span class="mandatory">*</span></label>
                        </div>
                        <div class="col-65">
                            <input type="text" id="member-address" name="member-address" placeholder="votre numéro et nom de rue.." value="{{ old('member-address') }}">
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
                            <input type="text" id="member-zipcode" name="member-zipcode" placeholder="votre code postal.." value="{{ old('member-zipcode') }}">
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
                            <input type="text" id="member-city" name="member-city" placeholder="votre ville.." value="{{ old('member-city') }}">
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
                            <input type="email" id="member-email" name="member-email" placeholder="votre email.." value="{{ old('member-email') }}">
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
                            <input type="text" id="member-primaryphone" name="member-primaryphone" placeholder="votre numéro principal.." value="{{ old('member-primaryphone') }}">
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
                            <input type="text" id="member-secondaryphone" name="member-secondaryphone" placeholder="votre numéro secondaire.." value="{{ old('member-secondaryphone') }}">
                        </div>
                    </div>
                    {{-- mutual --}}
                    <div class="row">
                        <div class="col-30">
                            <label for="member-mutual">Complémentaire Santé <span class="mandatory">*</span></label>
                        </div>
                        <div class="col-65">
                            <select id="member-mutual" name="member-mutual">
                                <option value="" selected disabled>votre complémentaire Santé / Mutuelle..</option>
                                @foreach ($mutuals as $mutual)
                                <option value="{{ $mutual->id }}">{{ $mutual->name }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('member-mutual'))
                            <p class="error")>{{ $errors->first('member-mutual') }}</p>
                            @endif
                        </div>
                    </div>
                            {{-- <select id="member-mutual" name="mutual"> --}}
                                {{-- @if(isset($request) && (!$request->has('submit'))) --}}
                                {{-- ou --}}
                                {{-- @if(!Input::has('submit')) //
                                    <option value="" selected disabled>votre complémentaire Santé / Mutuelle..</option>
                                    @foreach ($mutuals as $mutual)
                                            <option value="{{ $mutual->id }}">{{ $mutual->name }}</option>
                                    @endforeach
                                @else    
                                    @foreach ($mutuals as $mutual)
                                        @if (Input::old('member-mutual') == "{{ $mutual->id }}")
                                            <option value="{{ $mutual->id }}"selected>{{ $mutual->name }}</option>
                                        @else
                                            <option value="{{ $mutual->id }}">{{ $mutual->name }}</option>
                                        @endif
                                    @endforeach
                                @endif --}}
                            {{-- </select> --}}
                        
                    {{-- pension─ --}}
                    <div class="row">
                        <div class="col-30">
                            <label for="member-pension">Caisse de Retraite <span class="mandatory">*</span></label>
                        </div>
                        <div class="col-65">
                            <select id="member-pension" name="member-pension">
                                <option value="" selected disabled>votre caisse de retraite..</option>
                                @foreach ($pensions as $pension)
                                        <option value="{{ $pension->id }}">{{ $pension->name }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('member-pension'))
                                <p class="error")>{{ $errors->first('member-pension') }}</p>
                            @endif
                        </div>
                    </div>
                    {{-- <div class="row">
                        <div class="col-30">
                            <label for="member-pension">Caisse de Retraite <span class="mandatory">*</span></label>
                        </div>
                        <div class="col-65">
                            <select id="member-pension" name="member-pension">
                                
                                @if(!isset($request))
                                    <option value="" selected disabled>votre caisse de retraite..</option>
                                    @foreach ($pensions as $pension)
                                            <option value="{{ $pension->id }}">{{ $pension->name }}</option>
                                    @endforeach
                                @else    
                                    @foreach ($pensions as $pension)
                                        @if (Input::old('member-pension') == "{{ $pension->id }}")
                                            <option value="{{ $pension->id }}"selected>{{ $pension->name }}</option>
                                        @else
                                            <option value="{{ $pension->id }}">{{ $pension->name }}</option>
                                        @endif
                                    @endforeach
                                @endif
                            </select>
                            @if($errors->has('member-pension'))
                                <p class="error")>{{ $errors->first('member-pension') }}</p>
                            @endif
                        </div>
                    </div> --}}
                    
                    {{-- activities  --}}
                    <div class="row">
                        <div class="col-30">
                            <label>Activités choisies <span class="mandatory">*</span></label>
                        </div>
                        <div class="col-65">
                            @foreach ($activities as $activity)
                                <label>
                                    <input type="checkbox" name="member-activities[]" value="{{$activity->id}}">{{$activity->name}}
                                </label>
                                <br>
                            @endforeach
                            @if($errors->has('member-activities'))
                                <p class="error")>{{ $errors->first('member-activities') }}</p>
                            @endif
                        </div>
                    </div>
                    
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
    <script src="/js/datepicker.js"></script>
    <script src="/js/inscription.js"></script>
@endsection
<!-- .main-content -->