@php
$colors = array("primary", "secondary", "success", "danger", "warning", "info");
$iColors=1;
@endphp
@extends('layouts.dashboardUser')
@section('content')
@section('welcome','Subcategorias')
<div class="row d-none d-sm-block">
    <div class="col-lg-12">
        <!-- STATISTIC-->
        <div>
            <div class="row">
                @foreach ($subcategories as $category)
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="card statistic__item bg-{{$colors[$iColors++]}}">
                            <button data-toggle="modal" data-target="#staticModal{{$category->id}}">
                                <div class="mx-auto d-block">
                                    <h2 class="number"><i class="text-white {{$category->category->icon_image}}"></i></h2>
                                    <span class="text-white">{{$category->name}}</span>
                                    <div class="icon">
                                        <i class="text-dark {{$category->category->icon_image}}"></i>
                                    </div>
                                </div>
                            </button>
                        </div>
                    </div>
                    @php
                    if ($iColors>4) {
                        $iColors=0;
                    }
                    @endphp
                @endforeach
                
                
        </div>
        <!-- END STATISTIC-->
    </div>
</div>
</div>
{{-- categories mobile --}}
<div class="card d-block d-sm-none">
    <div class="card-header">
        <strong>Block Level Buttons </strong>
        <small>Use this class
            <code>.btn-block</code>
        </small>
    </div>
    <div class="card-body">
        @foreach ($subcategories as $category)
            <button data-toggle="modal" data-target="#staticModal{{$category->id}}" class="btn btn-block btn-outline-{{$colors[$iColors++]}} btn-lg">{{$category->name}} <span class="{{$category->category->icon_image}}"></span>  </button>
            @php
            if ($iColors>4) {
                $iColors=0;
            }
            @endphp
        @endforeach
    </div>
</div>
{{-- categories mobile --}}


@foreach ($subcategories as $category)
    <!-- modal static -->
    <div class="modal fade" id="staticModal{{$category->id}}" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true"
     data-backdrop="static">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticModalLabel">Añadir Registro </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-header">{{$category->name}}</div>
                        <div class="card-body">
                            <form method="POST" action="{{ url('record/')}}">
                                @csrf
                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Total egreso</label>
                                    <input id="origen" name="cc-payment" type="number" class="form-control" aria-required="true" aria-invalid="false" >
                                </div>
                                <div class="form-group has-success">
                                    <label for="cc-name" class="control-label mb-1">Cantidad</label>
                                    <input id="destino" name="cc-name" type="number" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
                                        autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                                    <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                </div>
                                <input type="hidden" name="subcategory" value="{{$category->name}}">
                                <div>
                                    <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                        <i class="fa fa-save"></i>&nbsp;
                                        <span id="payment-button-amount"> Guardar
                                        <span id="payment-button-sending" style="display:none;">Sending…</span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Confirm</button>
                </div>
            </div>
        </div>
    </div>
@endforeach
@endsection