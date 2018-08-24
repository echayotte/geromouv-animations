@extends('layouts.layout')
@extends('layouts.app')

@section('content')
<div class="main-content">
    <section>
        <header class="entry-header">
            <h1 class="entry-title">S'inscrire en tant qu'admin</h1>
        </header>
        <!-- .entry-header -->
        
        <div class="entry-content">
            <div class="login-form">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div>
                        <label for="name">Nom</label>
                        <div>
                            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                            
                            @if ($errors->has('name'))
                            <p class="error")>{{ $errors->first('name') }}</p>
                            @endif
                        </div>
                    </div>
                    
                    <div>
                        <label for="email">Email</label>
                        <div>
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                            
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
                    
                    <div>
                        <label for="password-confirm">Confirmation mot de passe</label>
                        
                        <div>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                        </div>
                    </div>
                    
                    <div>
                        <input class="btn btn--space" type="submit" id="submit" value="Inscription" name="submit">
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
<!-- .main-content -->
@endsection
