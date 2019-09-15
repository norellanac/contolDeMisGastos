@extends('layouts.dashboardUser')
@section('content')
@if (Auth::check() && is_null(Auth::user()->country_id) )
   <<div class="text-center sufee-alert alert with-close alert-danger alert-dismissible fade show">
    <span class="badge badge-pill badge-danger">Completa tu información</span> <br>
    Por favor completa la información para poder iniciar a registrar tus ingresos y egresos.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
<div class="login-wrap">
    <div class="login-content">
        <div class="login-logo">
            <a href="#">
                <img src="{{ asset('images/icon/logo.png')}}" alt="CoolAdmin">
            </a>
        </div>
        <p>
            <p class="text-center">Completa la informacion de tu cuenta</p></p>
        <div class="login-form">
            <form method="POST" action="{{ url('users') }}"  enctype="multipart/form-data" >
            @csrf
                <div class="form-group">
                    <label>País</label>
                    <select name="country_id"  id="categorias" class="form-control{{ $errors->has('country_id') ? ' is-invalid' : '' }}" >
                    {{--registros relacionados a Distribuidor--}}
                        <option value="">Seleccione País</option>
                        @foreach($countries as $country)
                            <option value={{$country->id}}>{{ $country->name}}</option>
                        @endforeach
                        </select>
                        @if ($errors->has('country_id'))
                            <span class="invalid-feedback" role="alert">
                                <strong><i class="fas fa-exclamation-triangle"></i>{{ $errors->first('country_id') }}</strong>
                            </span>
                        @endif
                </div>

                <div class="form-group">
                    <label>Departamento</label>
                    <select type="number" name="state_id" id="departamentos" placeholder="seller_id de stickers" class="form-control{{ $errors->has('state_id') ? ' is-invalid' : '' }}" autofocus required>
                        <option value="">Departamentos</option>
                    </select>
                    @if ($errors->has('state_id'))
                        <span class="invalid-feedback" role="alert">
                            <strong><i class="fas fa-exclamation-triangle"></i>{{ $errors->first('state_id') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label>Municipio</label>
                    <select type="number" name="city_id" id="cities" placeholder="city_id de stickers" class="form-control{{ $errors->has('city_id') ? ' is-invalid' : '' }}" autofocus required>
                        <option value="">Ciudad</option>
                    </select>
                    @if ($errors->has('city_id'))
                        <span class="invalid-feedback" role="alert">
                            <strong><i class="fas fa-exclamation-triangle"></i>{{ $errors->first('city_id') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label>Zona</label>
                    <input type="number" name="zone"  min="0" class="form-control{{ $errors->has('zone') ? ' is-invalid' : '' }}" value="{{ old('zone') }}"   autofocus required>

                    @if ($errors->has('zone'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('zone') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label>Calle</label>
                    <input type="number" min="0" class="au-input au-input--full{{ $errors->has('emailstreet') ? ' is-invalid' : '' }}" name="street" value="{{ old('street') }}"  >

                    @if ($errors->has('street'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('street') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label>Avenida</label>
                    <input id="avenue" type="number" min="0" class="au-input au-input--full{{ $errors->has('avenue') ? ' is-invalid' : '' }}" name="avenue" >

                    @if ($errors->has('avenue'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('avenue') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="file-input" class=" form-control-label">Imagen</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input  type="file" id="url_image" accept="image/*" class="form-control-file{{ $errors->has('url_image') ? ' is-invalid' : '' }}" name="url_image" >

                        @if ($errors->has('url_image'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('url_image') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Continuar</button>
                {{--<div class="social-login-content">
                    <div class="social-button">
                        <button class="au-btn au-btn--block au-btn--blue m-b-20">register with facebook</button>
                        <button class="au-btn au-btn--block au-btn--blue2">register with twitter</button>
                    </div>
                </div>--}}
            </form>
        </div>
    </div>
</div>

<script src="{{ asset('vendor/jquery-3.2.1.min.js')}}"></script>
<script>
    //funcion para obtener departamentos relacionados a pais
  $(document).ready(function(){
    $("#categorias").change(function(){
      var id = $(this).val();
      //products/seller es la ruta en el controlador de productos
      $.get('{{url('states')}}'+'/'+id, function(data){
//esta el la peticion get, la cual se divide en tres partes. ruta,variables y funcion
        //console.log(data);
          var idSelected = '<option value="" selected  disabled>Seleccione Departamento</option>'
            for (var i=0; i<data.length;i++)
              idSelected+='<option value="'+data[i].id+'">'+data[i].name+'</option>';
            $("#departamentos").html(idSelected);
      });
    });
  });
</script>
<script>
    //funcion para obtener departamentos relacionados a pais
  $(document).ready(function(){
    $("#departamentos").change(function(){
      var id = $(this).val();
      //products/seller es la ruta en el controlador de productos
      $.get('{{url('cities')}}'+'/'+id, function(data){
//esta el la peticion get, la cual se divide en tres partes. ruta,variables y funcion
        //console.log(data);
          var idSelected = '<option value="" selected  disabled>Seleccione Municipio</option>'
            for (var i=0; i<data.length;i++)
              idSelected+='<option value="'+data[i].id+'">'+data[i].name+'</option>';
            $("#cities").html(idSelected);
      });
    });
  });
</script>
@endsection
@section('sectionJS')

@endSection
