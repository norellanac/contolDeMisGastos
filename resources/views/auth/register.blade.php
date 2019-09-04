@extends('layouts.dashboardUser')

@section('content')
<div class="login-wrap">
    <div class="login-content">
        <div class="login-logo">
            <a href="#">
                <img src="{{ asset('images/icon/logo.png')}}" alt="CoolAdmin">
            </a>
        </div>
        <div class="login-form">
            <form method="POST" action="{{ route('register') }}" onsubmit="return submitform()">
            @csrf
                <div class="form-group">
                    <label>Nombre</label>
                    <input type="text" class="au-input au-input--full{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                    @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label>Correo electronico</label>
                    <input type="email" class="au-input au-input--full{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label>Contraseña (trazo de al menos 3 puntos )</label>
                    <input id="password" type="password" class="patternlock" class="au-input au-input--full{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group d-none">
                    <label>Confirmar Contraseña</label>
                    <input id="password-confirm" type="hidden" class="au-input au-input--full" name="password_confirmation" required>
                </div>
                <div class="login-checkbox">
                    <label>
                        <input type="checkbox" name="aggree" required>Acepto los términos y condiciones
                    </label>
                </div>
                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Regístrate</button>
                {{--<div class="social-login-content">
                    <div class="social-button">
                        <button class="au-btn au-btn--block au-btn--blue m-b-20">register with facebook</button>
                        <button class="au-btn au-btn--block au-btn--blue2">register with twitter</button>
                    </div>
                </div>--}}
            </form>
            <div class="register-link">
                <p>
                    <a href="{{url('login')}}">Iniciar sesión</a>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
@section('sectionJS')
<script>
  function submitform(){
    var pass = document.getElementById("password").value;
    //Set
    $('#password-confirm').val(pass);
    /*console.log($('#password-confirm').val());
    alert("You entered " + pass); */
    return true;
  }
  </script>

@endSection
