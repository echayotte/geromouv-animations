<!DOCTYPE html>
<html lang="fr-FR">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">{{-- mandatory for Laravel if not, $errors --}}
	<title>
		@yield('title')
	</title>

	{{-- sela theme --}}
	<link rel="stylesheet" id="genericons-css" href="https://cdnjs.cloudflare.com/ajax/libs/genericons/3.1/genericons.css" type="text/css"{{-- social network font icons --}}
	 media="all"> 
	<link rel="icon" href="/storage/images/assets/favicon_geromouv.png" sizes="32x32" />{{-- end sela theme --}}

	@yield('css'){{-- main style --}}
	<link href="{{ asset('css/app.css') }}" rel="stylesheet" type='text/css' media='all'>
</head>

<body class="page">
	<a id="backToTop"></a>
	<div class="site">
		<header>
			@if (Auth::check())
				<nav id="site-navigation" class="main-navigation">
			@else
				<nav id="site-navigation" class="main-navigation nav-flex">
			@endif
					<div class="nav-flex">
						@if (Auth::check())
						{{-- nothing --}}
						@else
						<img id="logo" src="{{ asset('storage/images/assets/logo-70.png') }}" alt="logo">
						@endif
						
						<!-- button for mobile navigation -->
						<div style="display:flex; justify-content:center;">
							<button class="menu-toggle">Menu</button>
							{{-- <ion-icon name="log-out" size="large"></ion-icon> --}}
						</div>
						<div>
							<ul>
								@if (Auth::check())
									<li class="current_page_item item-left">
										<a href="#">Accueil</a>
									</li>
								@else
									<li class="current_page_item">
										<a href="#">Accueil</a>
									</li>
								@endif

									<li>
										<a href="#">Notre équipe</a>
									</li>
									<li class="menu-item-has-children">
										<a href="#">Parcours</a>
										<ul class="sub-menu">
											<li>
												<a href="#">Nos modules d&rsquo;exercices</a>
											</li>
											<li>
												<a href="#">Nos réalisations</a>
											</li>
											<li>
												<a href="#">Nos soutiens</a>
											</li>
										</ul>
									</li>
									<li class="menu-item-has-children">
										<a href="#">Animations</a>
										<ul class="sub-menu">
											<li>
												<a href="{{url('presentation')}}">Présentation et Inscription</a>
											</li>
											<li>
												<a href="#">Planning</a>
											</li>
											<li>
												<a href="#">Animateurs et Professionnels de Santé</a>
											</li>
										</ul>
									</li>
									<li>
										<a href="#">Actualités</a>
									</li>
									<li>
										<a href="#">Contact</a>
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
									<li>@include('layouts.app')</li>
								@else
									<li>@include('layouts.app')</li>
								@endif
							</ul>
						</div>
					</div>
				</nav><!-- #site-navigation -->
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
	<script src="https://unpkg.com/ionicons@4.5.5/dist/ionicons.js"></script>
</body>

</html>