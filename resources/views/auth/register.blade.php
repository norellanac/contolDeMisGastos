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
                        <input type="checkbox" name="aggree" required>
                        <button type="button" class="btn btn-link" data-toggle="modal" data-target="#staticModal">
    											Acepto los términos y condiciones
    										</button>
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
<!-- modal static -->
<div class="modal fade" id="staticModal" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true"
 data-backdrop="static">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticModalLabel">Términos y condiciones</h5>
        {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> --}}
      </div>
      <div class="modal-body">
        <p>
          No cobramos por el uso que haces de QuéCompraste.website. Por el contrario, los negocios y las organizaciones nos pagan para que te mostremos anuncios de sus productos y servicios. Al usar nuestros Productos, aceptas que podemos mostrarte anuncios que consideremos que te resultarán relevantes para ti y tus intereses. Usamos tus datos personales como ayuda para determinar qué anuncios mostrarte.
          <br>
No vendemos tus datos personales a los anunciantes ni compartimos información que te identifique directamente (como tu nombre, dirección de correo electrónico u otra información de contacto) con los anunciantes, a menos que nos des tu permiso expreso. Por el contrario, los anunciantes pueden proporcionarnos datos como el tipo de público que quieren que vea sus anuncios, y nosotros mostramos esos anuncios a las personas que pueden estar interesadas en ellos. Proporcionamos a los anunciantes informes sobre el rendimiento de sus anuncios para ayudarlos a entender cómo interactúan las personas con su contenido. Consulta la sección 2 a continuación para obtener más información.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Aceptar</button>
      </div>
    </div>
  </div>
</div>
<!-- end modal static -->
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
