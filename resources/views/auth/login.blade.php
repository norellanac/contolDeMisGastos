@extends('layouts.dashboardUser')

@section('content')
<div class="login-wrap">
    <div class="login-content">
        <div class="login-logo">
            <a href="#">
                <img src="{{ asset('images/icon/logo.png') }}" alt="CoolAdmin">
            </a>
        </div>
        <div class="login-form">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <label>Correo electronico</label>
                    <input id="email" type="email" class="au-input au-input--full{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label>Contraseña</label>
                    <input id="password" type="password" class="au-input au-input--full{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="login-checkbox">
                    <label>
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>Mantener mi sesion
                    </label>
                    <label>
                        <a href="{{ url('password/reset') }}">Olvidé mi contraseña</a>
                    </label>
                </div>
                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Iniciar sesión</button>
                {{--<div class="social-login-content">
                    <div class="social-button">
                        <button class="au-btn au-btn--block au-btn--blue m-b-20">sign in with facebook</button>
                        <button class="au-btn au-btn--block au-btn--blue2">sign in with twitter</button>
                    </div>
                </div>--}}
            </form>
            <div class="register-link">
                <p>
                    ¿Aún no tienes cuenta? 
                    <a href="{{url('register')}}">Regístrate</a>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
