<div>
    @if (Auth::check())
        <div class="links">
            <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Déconnexion</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    @else
        @if(Request::is('login'))
            <div class="links">
                <a href="{{ route('register') }}">Inscription</a>
            </div>
        @elseif(Request::is('register'))
            <div class="links">
                <a href="{{ route('login') }}">Connexion</a>
            </div>
        @endif
    @endif
</div>