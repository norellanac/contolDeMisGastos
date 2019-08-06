@php
$colors = array("primary", "secondary", "success", "danger", "warning", "info");
$iColors=1;
@endphp
@extends('layouts.dashboardUser')
@section('content')
@section('welcome','Subcategorias')
<div class="row">
  @if (session('message'))
  <div class="sufee-alert alert with-close alert-{{ session('alert') }} alert-dismissible fade show">
    <span class="badge badge-pill badge-{{ session('alert') }}">{{ session('alert') }}</span>
    {{ session('message') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  @endif
  <div class="row">
    <!-- STATISTIC-->
    <div class="col-6 col-xs-6 col-sm-6 col-md-3">
      <div class="card">
        <img class="img-fluid"
        src="https://www.diariofranquicias.com/uploads/s1/11/43/477_360_logo_mc_menu_big_mac.png"  width="50%" alt="Card image cap">
        <div class="card-body">
          <h4 class="card-title mb-3">Card Image Title</h4>
                  <button type="button" name="button" class="btn btn-primary btn-sm">Ok</button>
        </div>
      </div>
    </div>
    <div class="col-6 col-xs-6 col-sm-6 col-md-3">
      <div class="card">
        <img class="img-fluid" src="https://www.diariofranquicias.com/uploads/s1/11/43/477_360_logo_mc_menu_big_mac.png" width="50%" alt="Card image cap">
        <div class="card-body">
          <h4 class="card-title mb-3">Card Image Title</h4>
          <button type="button" name="button" class="btn btn-primary btn-sm">Ok</button>
        </div>
      </div>
    </div>
    <div class="col-6 col-xs-6 col-sm-6 col-md-3">
      <div class="card mx-auto d-block">
        <img class="img-fluid" src="https://www.diariofranquicias.com/uploads/s1/11/43/477_360_logo_mc_menu_big_mac.png" width="50%" alt="Card image cap">
        <div class="card-body">
          <h4 class="card-title mb-3">Card Image Title</h4>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
            content.
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
