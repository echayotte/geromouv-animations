
{{-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
    <span class="navbar-toggler-icon"></span>
</button> --}}



<div class="top-right links">
    @guest
    <a href="{{ route('login') }}">Connexion</a>
    <a href="{{ route('register') }}">Inscription</a>
    @else
    <a href="{{ route('logout') }}"
        onclick="event.preventDefault();document.getElementById('logout-form').submit();">Déconnexion</a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
    @endguest
</div>