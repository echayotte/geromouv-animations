<!DOCTYPE html>
<html lang="fr-FR">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	{{-- mandatory for Laravel if not, $errors --}}
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>
		@yield('title')
	</title>
	{{-- sela theme --}}
	{{-- social network font icons --}}
	<link rel="stylesheet" id="genericons-css" 
	    href="https://cdnjs.cloudflare.com/ajax/libs/genericons/3.1/genericons.css"
	    type="text/css" media="all">
	{{-- favicon --}}
	<link rel="icon" href="/storage/images/assets/favicon_geromouv.png" sizes="32x32" />
	{{-- end sela theme --}}
	@yield('css')
	{{-- main style --}}
	<link href="{{ asset('css/app.css') }}" rel="stylesheet" type='text/css' media='all'>
	
</head>
<body class="page">
	<a id="backToTop"></a>
	<div class="site">
		<header>
			<nav id="site-navigation" class="main-navigation">
				<!-- button for mobile navigation -->
				<button class="menu-toggle">Menu</button>
				<div>
					@if (Auth::check())
					@else
					<div id="logo"><img src="{{ asset('storage/images/assets/logo-70.png') }}" alt="logo"></div>
					@endif
					<ul>
						<li class="current_page_item">
							<a target="_blank" href="http://geromouv.fr/">Accueil</a>
						</li>
						<li>
							<a target="_blank" href="http://geromouv.fr/notreequipe/">Notre équipe</a>
						</li>
						<li class="menu-item-has-children">
							<a href="">Parcours</a>
							<ul class="sub-menu">
								<li>
									<a target="_blank" href="http://geromouv.fr/modules-dexercice/">Nos modules d&rsquo;exercices</a>
								</li>
								<li>
									<a target="_blank" href="http://geromouv.fr/nos-realisations/">Nos réalisations</a>
								</li>
								<li>
									<a target="_blank" href="http://geromouv.fr/testimonial/">Nos soutiens</a>
								</li>
							</ul>
						</li>
						<li class="menu-item-has-children">
							<a href="">Animations</a>
							<ul class="sub-menu">
								<li>
									<a href="{{url('presentation')}}">Présentation et Inscription</a>
								</li>
								<li>
									<a href="{{url('planning')}}">Planning</a>
								</li>
								<li>
									<a href="">Animateurs et Professionnels de Santé</a>
								</li>
							</ul>
						</li>
						<li>
							<a target="_blank" href="http://www.geromouv.fr/actualites/">Actualités</a>
						</li>
						<li>
							<a target="_blank" href="http://geromouv.fr/contact/">Contact</a>
						</li>
						
						@if (Auth::check())
						<li class="menu-item-has-children">
							<a href="{{url('admin')}}">Admin</a>
							<ul class="sub-menu">
								<li>
									<a href="{{url('member')}}">Liste des inscrits</a>
								</li>
								<li>
									<a href="{{url('mutual')}}">Liste des complémentaires</br>de santé</a>
								</li>
								<li>
									<a href="{{url('pension')}}">Liste des caisses de retraites</a>
								</li>
								<li>
									<a href="{{url('#')}}">Liste des animations</a>
								</li>
								<li>
									<a href="{{url('#')}}">Liste des vidéos</a>
								</li>
							</ul>
						</li>
						@endif
					</ul>

					{{-- @section('auth') --}}
					<div class="top-right links">
						@if (Route::has('login'))
						@auth
						<a href="{{ route('logout') }}"
							onclick="event.preventDefault();document.getElementById('logout-form').submit();">Déconnexion</a>
						<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
							@csrf
						</form>
						@endauth
						@endif
					</div>
					{{-- @endsection --}}
					
				</div>
			</nav>
			<!-- #site-navigation -->
		</header>
		@include('layouts.master')
		<footer class="site-footer">
			<div class="social-links">
				<ul>
					<li>
						<a target="_blank" title="LinkedIn Geromouv" href="https://www.linkedin.com/company/10671300?trk=tyah&#038;trkInfo=clickedVertical%3Acompany%2CentityType%3AentityHistoryName%2CclickedEntityId%3Acompany_company_10671300%2Cidx%3A0">
							<span class="screen-reader-text">LinkedIn</span>
						</a>
					</li>
					<li>
						<a target="_blank" title="Twitter Geromouv" href="https://twitter.com/geromouv4">
							<span class="screen-reader-text">Twitter</span>
						</a>
					</li>
					<li>
						<a target="_blank" title="Facebook Geromouv" href="https://www.facebook.com/geromouv/">
							<span class="screen-reader-text">Facebook</span>
						</a>
					</li>
					<li>
						<a target="_blank" title="Youtube Geromouv" href="https://www.youtube.com/channel/UCWZe2W78vFnkjPDlwfLmkJg">
							<span class="screen-reader-text">Youtube</span>
						</a>
					</li>
				</ul>
			</div>
			<div class="site-info">
				<a href="http://geromouv-animations/protection-des-donnees" title="Protection des données personnelles">politique de protection des données personnelles</a>
			</div>
		</footer>
	</div>
	<!-- SCRIPTS -->
	@yield('js')
	<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
