@extends('layouts.layout')
@extends('layouts.app')

@section('content')
<div class="main-content">
    <section>
        <header class="entry-header">
            <h1 class="entry-title">Se connecter en tant qu'admin</h1>
        </header>
        <!-- .entry-header -->
        
        <div class="entry-content">
            <div class="login-form">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    
                    <div>
                        <label for="email">Email</label>
                        <div>
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                            
                            @if ($errors->has('email'))
                            <p class="error")>{{ $errors->first('email') }}</p>
                            @endif
                        </div>
                    </div>
                    <div>
                        <label for="password">Mot de passe</label>
                        <div>
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                            
                            @if ($errors->has('password'))
                            <p class="error")>{{ $errors->first('password') }}</p>
                            @endif
                        </div>
                    </div>    
                    {{-- <div> 
                        <label>
                            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>Se souvenir de moi
                        </label>
                    </div> --}}
                    <div>
                        <input class="btn btn--space" type="submit" id="submit" value="Se connecter" name="submit">
                        {{-- <a href="{{ route('password.request') }}">Mot de passe oublié</a> --}}
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
@endsection
