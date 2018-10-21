
{{-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
    <span class="navbar-toggler-icon"></span>
</button> --}}



<div class="top-right links">
    @guest
    @if(Request::is('login'))
    <a href="{{ route('register') }}">Inscription</a>
    @else
    @endif 
    @if(Request::is('register'))
    <a href="{{ route('login') }}">Connexion</a>
    @else
    @endif
    
    @else
    <a href="{{ route('logout') }}"
        onclick="event.preventDefault();document.getElementById('logout-form').submit();">Déconnexion</a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
    @endguest
</div>