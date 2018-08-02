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
                <p>
                <strong>À retourner dûment complété, Accompagné du certificat médical et du paiement</strong>
                </p>
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

        <div class="registration">
            <form action="{{ action('MemberController@store') }}" method="post">
                @csrf
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
                <div class="row">
                    <div class="col-30">
                        <label for="datepicker">Date de naissance <span class="mandatory">*</span></label>
                    </div>
                    <div class="col-65">
                        <input type="text" id="datepicker" name="member-birthday" placeholder="Votre date de naissance..">
                        @if($errors->has('member-birthday'))
                            <p>{{ $errors->first('member-birthday') }}</p>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-30">
                        <label for="member-gender">Sexe <span class="mandatory">*</span></label>
                    </div>
                    <div class="col-65">
                        <label for="member-gender">Femme</label>
                        <input type="radio" id="member-gender" name="member-gender" value="Femme" value="{{ old('member-gender') }}">

                        <label for="mmeber-gender">Homme</label>
                        <input type="radio" id="member-gender" name="member-gender" value="Homme" value="{{ old('member-gender') }}">
                    </div>
                    @if($errors->has('member-gender'))
                        <p class="error")>{{ $errors->first('member-gender') }}</p>
                    @endif
                </div>
                <div class="row">
                    <div class="col-30">
                        <label for="member-address">Adresse <span class="mandatory" value="{{ old('member-address') }}">*</span></label>
                    </div>
                    <div class="col-65">
                        <input type="text" id="member-address" name="member-address" placeholder="votre numéro et nom de rue..">
                    </div>
                    @if($errors->has('member-address'))
                        <p class="error")>{{ $errors->first('member-address') }}</p>
                    @endif
                </div>
                <div class="row">
                    <div class="col-30">
                        <label for="member-zipcode">Code Postal <span class="mandatory" value="{{ old('member-zipcode') }}">*</span></label>
                    </div>
                    <div class="col-65">
                        <input type="text" id="member-zipcode" name="member-zipcode" placeholder="votre code postal..">
                    </div>
                    @if($errors->has('member-zipcode'))
                        <p class="error")>{{ $errors->first('member-zipcode') }}</p>
                    @endif
                </div>
                <div class="row">
                    <div class="col-30">
                        <label for="member-city">Ville <span class="mandatory" value="{{ old('member-city') }}">*</span></label>
                    </div>
                    <div class="col-65">
                        <input type="text" id="member-city" name="member-city" placeholder="votre ville..">
                    </div>
                    @if($errors->has('member-city'))
                        <p class="error")>{{ $errors->first('member-city') }}</p>
                    @endif
                </div>
                <div class="row">
                    <div class="col-30">
                        <label for="member-email">Email <span class="mandatory">*</span></label>
                    </div>
                    <div class="col-65">
                        <input type="member-email" id="member-email" name="member-email" placeholder="votre email.." value="{{ old('member-email') }}">
                    </div>
                    @if($errors->has('member-email'))
                        <p class="error")>{{ $errors->first('member-email') }}</p>
                    @endif
                </div>
                <div class="row">
                    <div class="col-30">
                        <label for="member-phone">N° de téléphone fixe</label>
                    </div>
                    <div class="col-65">
                        <input type="text" id="member-phone" name="member-phone" placeholder="votre numéro de fixe.." value="{{ old('member-phone') }}">
                        {{-- <input type="tel" id="member-phone" name="member-phone" placeholder="votre numéro de fixe.. : 00 00 00 00 00" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" /> --}}
                    </div>
                    @if($errors->has('member-phone'))
                        <p class="error")>{{ $errors->first('member-phone') }}</p>
                    @endif
                </div>
                <div class="row">
                    <div class="col-30">
                        <label for="member-cellphone">N° de téléphone portable <span class="mandatory">*</span></label>
                    </div>
                    <div class="col-65">
                        <input type="text" id="member-cellphone" name="member-cellphone" placeholder="votre numéro de portable.." value="{{ old('member-cellphone') }}">
                        {{-- <input type="tel" id="cellphonecellphone" name="cellphonecellphone" placeholder="votre numéro de portable.. : 00 00 00 00 00" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" /> --}}
                    </div>
                    @if($errors->has('member-cellphone'))
                        <p class="error")>{{ $errors->first('member-cellphone') }}</p>
                    @endif
                </div>
                <div class="row">
                    <div class="col-30">
                        <label for="member-mutual">Complémentaire Santé <span class="mandatory">*</span></label>
                    </div>
                    <div class="col-65">
                        <select id="member-mutual" name="member-mutual" value="{{ old('member-mutual') }}">
                            <option value="" selected disabled>votre complémentaire Santé / Mutuelle..</option>
                            @foreach ($mutuals as $mutual)
                                <option value="{{ $mutual->id }}">{{ $mutual->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    @if($errors->has('member-mutual'))
                        <p class="error")>{{ $errors->first('member-mutual') }}</p>
                    @endif
                </div>
                <div class="row">
                    <div class="col-30">
                        <label for="member-pension">Caisse de Retraite <span class="mandatory">*</span></label>
                    </div>
                    <div class="col-65">
                        <select id="member-pension" name="member-pension" value="{{ old('member-pension') }}">
                            <option value="" selected disabled>votre caisse de retraite..</option>
                            @foreach ($pensions as $pension)
                                <option value="{{ $pension->id }}">{{ $pension->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    @if($errors->has('member-pension'))
                        <p class="error")>{{ $errors->first('member-pension') }}</p>
                    @endif
                </div>
                <div class="row">
                    <div class="col-30">
                        <label for="activities">Activités choisies <span class="mandatory">*</span></label>
                    </div>
                    <div class="col-65">
                        <input type="checkbox" id="gym-douce" name="mem-gender">
                        <label for="gym-douce">Gym douce ludique</label>
                        <br>
                        <input type="checkbox" id="pilates" name="mem-gender">
                        <label for="pilates">Gym Pilâtes</label>
                        <br>
                        <input type="checkbox" id="marche-douce" name="mem-gender">
                        <label for="marche-douce">Marche douce avec bâtons</label>
                        <br>
                        <input type="checkbox" id="marche-nordique-douce" name="mem-gender">
                        <label for="marche-nordique-douce">Marche Nordique douce</label>
                        <br>
                        <input type="checkbox" id="marche-nordique-active" name="mem-gender">
                        <label for="marche-nordique-active">Marche Nordique active</label>
                    </div>
                    @if($errors->has('member-'))
                        <p class="error")>{{ $errors->first('member-') }}</p>
                    @endif
                </div>
                <div>
                    <input type="submit" id="submit" value="Envoyer">
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