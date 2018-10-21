
<div class="top-right links">
    @guest
        @if(Request::is('login'))
            <a href="{{ route('register') }}">Inscription</a>
        @elseif(Request::is('register'))
            <a href="{{ route('login') }}">Connexion</a>
        @endif

        @else
            <a href="{{ route('logout') }}"
                onclick="event.preventDefault();document.getElementById('logout-form').submit();">Déconnexion</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
    @endguest
</div>