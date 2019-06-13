@extends('layouts.dashboardUser')

@section('content')
<div class="login-wrap">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <div class="login-content">
        <div class="login-logo">
            <a href="#">
                <img src="images/icon/logo.png" alt="CoolAdmin">
            </a>
        </div>
        <div class="login-form">
            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                <div class="form-group">
                    <label>Correo electronico</label>
                    <input id="email" type="email" class="au-input au-input--full{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Enviar enlace de recuperación</button>
            </form>
        </div>
    </div>
</div>
@endsection
