@extends('layouts.layout') @section('content')

<div class="main-content">
    @include('layouts.partials.backToTop')
    <section>
        <header class="entry-header">
            <h1 class="entry-title">Les animations de GEROMOUV'</h1>
        </header>
        <!-- .entry-header -->

        <div class="entry-content">
            <p>
                GEROMOUV' propose des activités en extérieur destinés aux seniors qui désirent pratiquer une activité physique adaptée à
                leur besoin.
            </p>

            <div class="cards">
                <div class="cards__card card">
                    <img class="card__img" src="/storage/images/pages/presentation/seances.jpg">
                    <div class="card__body">
                        <h3>Séances d'activités</h3>
                        <a href="#">Présentation</a>
                    </div>
                </div>

                <div class="cards__card card">
                    <img class="card__img" src="/storage/images/pages/presentation/stages.jpg">
                    <div class="card__body">
                        <h3>Stages</h3>
                        <a role="button" href="#">Présentation</a>
                    </div>
                </div>

                <div class="cards__card card">
                    <img class="card__img" src="/storage/images/pages/presentation/events.jpg">
                    <div class="card__body">
                        <h3>Événements</h3>
                        <a role="button" href="#">Présentation</a>
                    </div>
                </div>
            </div>
            <!-- .cards -->
        </div>
        <!-- .entry-content -->
    </section>
    <hr>
    <div class="hidden-sections">
        <section>
            <div class="entry-content">

                <header class="entry-header">
                    <h2>
                        <span>Stages</span>
                    </h2>
                </header>

                <iframe src="https://www.youtube.com/embed/xvrVfAGH_C8?controls=1"></iframe>

                <img class="alignleft" src="/storage/images/pages/presentation/stages-vignette.png">
                <p>
                    Généralement, on utilise un texte en faux latin (le texte ne veut rien dire, il a été modifié), le Lorem ipsum ou Lipsum,
                    qui permet donc de faire office de texte d'attente. L'avantage de le mettre en latin est que l'opérateur
                    sait
                    <strong>au premier coup d'oeil</strong> que la page contenant ces lignes n'est pas valide, et surtout l'attention
                    du client n'est pas dérangée par le contenu, il demeure concentré seulement sur l'aspect graphique. Ce
                    texte a pour autre avantage d'utiliser des mots de longueur variable, essayant de simuler une occupation
                    normale. La méthode simpliste consistant à copier-coller un court texte plusieurs fois (« ceci est un
                    faux-texte ceci est un faux-texte ceci est un faux-texte ceci est un faux-texte ceci est un faux-texte
                    ») a l'inconvénient de ne pas permettre une juste appréciation typographique du résultat final. Il circule
                    des centaines de versions différentes du Lorem ipsum, mais ce texte aurait originellement été tiré de
                    l'ouvrage de Cicéron,
                    <a href="" class="lien">De Finibus Bonorum et Malorum</a> (Liber Primus, 32), texte populaire à cette époque, dont l'une des
                    premières phrases est:« Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur,
                    adipisci velit... » (« Il n'existe personne qui aime la souffrance pour elle-même, ni qui la recherche
                    ni qui la veuille pour ce qu'elle est... »).
                </p>
            </div>
        </section>
        <hr>
        <section>
            <div class="presentation-infos">

                <div class="entry-content">
                    <header class="entry-header">
                        <h2>
                            <span>Listes des [Stages] à venir</span>
                        </h2>
                    </header>

                    <ul class="presentation-infos__list">

                        <li class="presentation-infos__items items">
                            <ul class="items__sub-items sub-items">
                                <li class="sub-items__more">
                                    <a href="#" role="button">voir ce stage</a>
                                </li>
                                <li class="sub-items__title">[Auprès de la pierre de Rosette]</li>
                                <li class="sub-items__dot"> :&nbsp;&nbsp;du </li>
                                <li class="sub-items__date">[20/09]</li>
                                <li class="sub-items__dot"> au </li>
                                <li class="sub-items__date">[25/09]</li>
                                <li class="sub-items__dot"> à </li>
                                <li class="sub-items__place">[Figeac]</li>
                                <li class="sub-items__dot">:</li>
                            </ul>
                        </li>

                        <li class="presentation-infos__items items">
                            <ul class="items__sub-items sub-items">
                                <li class="sub-items__more">
                                    <a href="#" role="button">voir ce stage</a>
                                </li>
                                <li class="sub-items__title">stage xxx</li>
                                <li class="sub-items__dot">: du </li>
                                <li class="sub-items__date">[jj mm]</li>
                                <li class="sub-items__dot"> au </li>
                                <li class="sub-items__date">[jj mm]</li>
                                <li class="sub-items__dot">, à</li>
                                <li class="sub-items__place">[Cahors]</li>
                                <li class="sub-items__dot">:</li>
                            </ul>
                        </li>

                        <li class="presentation-infos__items items">
                            <ul class="items__sub-items sub-items">
                                <li class="sub-items__more">
                                    <a href="#" role="button">voir ce stage</a>
                                </li>
                                <li class="sub-items__title">stage xxx</li>
                                <li class="sub-items__dot">: du </li>
                                <li class="sub-items__date">[jj mm]</li>
                                <li class="sub-items__dot"> au </li>
                                <li class="sub-items__date">[jj mm]</li>
                                <li class="sub-items__dot">, à</li>
                                <li class="sub-items__place">[Cahors]</li>
                                <li class="sub-items__dot">:</li>
                            </ul>
                        </li>

                        <li class="presentation-infos__items items">
                            <ul class="items__sub-items sub-items">
                                <li class="sub-items__more">
                                    <a href="#" role="button">voir ce stage</a>
                                </li>
                                <li class="sub-items__title">stage xxx</li>
                                <li class="sub-items__dot">: du </li>
                                <li class="sub-items__date">[jj mm]</li>
                                <li class="sub-items__dot"> au </li>
                                <li class="sub-items__date">[jj mm]</li>
                                <li class="sub-items__dot">, à</li>
                                <li class="sub-items__place">[Cahors]</li>
                                <li class="sub-items__dot">:</li>
                            </ul>
                        </li>

                        <li class="presentation-infos__items items">
                            <ul class="items__sub-items sub-items">
                                <li class="sub-items__more">
                                    <a href="#" role="button">voir ce stage</a>
                                </li>
                                <li class="sub-items__title">stage xxx</li>
                                <li class="sub-items__dot">: du </li>
                                <li class="sub-items__date">[jj mm]</li>
                                <li class="sub-items__dot"> au </li>
                                <li class="sub-items__date">[jj mm]</li>
                                <li class="sub-items__dot">, à</li>
                                <li class="sub-items__place">[Cahors]</li>
                                <li class="sub-items__dot">:</li>
                            </ul>
                        </li>

                        <li class="presentation-infos__items items">
                            <ul class="items__sub-items sub-items">
                                <li class="sub-items__more">
                                    <a href="#" role="button">voir ce stage</a>
                                </li>
                                <li class="sub-items__title">stage xxx</li>
                                <li class="sub-items__dot">: du </li>
                                <li class="sub-items__date">[jj mm]</li>
                                <li class="sub-items__dot"> au </li>
                                <li class="sub-items__date">[jj mm]</li>
                                <li class="sub-items__dot">, à</li>
                                <li class="sub-items__place">[Cahors]</li>
                                <li class="sub-items__dot">:</li>
                            </ul>
                        </li>

                        <li class="presentation-infos__items items">
                            <ul class="items__sub-items sub-items">
                                <li class="sub-items__more">
                                    <a href="#" role="button">voir ce stage</a>
                                </li>
                                <li class="sub-items__title">stage xxx</li>
                                <li class="sub-items__dot">: du </li>
                                <li class="sub-items__date">[jj mm]</li>
                                <li class="sub-items__dot"> au </li>
                                <li class="sub-items__date">[jj mm]</li>
                                <li class="sub-items__dot">, à</li>
                                <li class="sub-items__place">[Cahors]</li>
                                <li class="sub-items__dot">:</li>
                            </ul>
                        </li>

                    </ul>
                </div>
                <!-- .entry-content -->
            </div>
            <!-- .presentation-infos -->
        </section>
    </div>

</div>
<!-- .main-content -->
@endsection