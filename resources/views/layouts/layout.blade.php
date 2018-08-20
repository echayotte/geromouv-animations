<!DOCTYPE html>
<html lang="fr-FR">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	{{-- mandatory for Laravel if not $errors --}}
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>
		@yield('title')
	</title>

	{{-- sela theme --}}
		{{-- social network font icons --}}
		<link rel="stylesheet" id="genericons-css" href="http://www.geromouv.fr/wp-content/plugins/jetpack/_inc/genericons/genericons/genericons.css?ver=3.1" type="text/css" media="all">
		{{-- favicon --}}
		<link rel="icon" href="/storage/images/assets/favicon_geromouv.png" sizes="32x32" />
	
	{{-- main style --}}
	<link rel='stylesheet' href='/css/app.css' type='text/css' media='all' />
	@yield('css')
</head>

<body class="page">
	<div class="site">

		<header>
			<nav id="site-navigation" class="main-navigation">
				<!-- button for mobile navigation -->
				<button class="menu-toggle">Menu</button>
				<div>
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
									<a href="http://geromouv-animations/presentation_et_inscription">Présentation et Inscription</a>
								</li>
								<li>
									<a href="http://geromouv-animations/event/">Planning</a>
								</li>
							</ul>
						</li>
						<li>
							<a target="_blank" href="http://geromouv.fr/blog/">Blog</a>
						</li>
						<li>
							<a target="_blank" href="http://geromouv.fr/contact/">Contact</a>
						</li>
					</ul>
				</div>
			</nav>
			<!-- #site-navigation -->
		</header>
		<!-- header -->


		@include('layouts.master')
		<!-- .site-content -->
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
		<!-- .site-info -->
		</footer>
		<!-- .site-footer -->

	</div>
	<!-- .page -->

	<!-- SCRIPTS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>	
	@yield('js')
	<script src="/js/app.js"></script>
</body>

</html>
