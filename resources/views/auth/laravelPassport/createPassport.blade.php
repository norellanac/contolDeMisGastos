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
            <form method="POST" action="{{ url('oauth/clients') }}">
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
                    <label>Redirect</label>
                    <input type="text" class="au-input au-input--full{{ $errors->has('redirect') ? ' is-invalid' : '' }}" name="redirect" value="{{ old('redirect') }}"  >

                    @if ($errors->has('redirect'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('redirect') }}</strong>
                        </span>
                    @endif
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
