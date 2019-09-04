@php
$colors = array("primary", "secondary", "success", "danger", "warning", "info");
$iColors=1;
@endphp
@extends('layouts.dashboardUser')
@section('content')
@section('welcome','Registrar gasto')
<div class="row d-none d-sm-block">
  @if (session('message'))
  <div class="sufee-alert alert with-close alert-{{ session('alert') }} alert-dismissible fade show">
    <span class="badge badge-pill badge-{{ session('alert') }}">{{ session('alert') }}</span>
    {{ session('message') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  @endif
    <div class="col-lg-12">
        <!-- STATISTIC-->
        <div>
            <div class="row">
                @foreach ($categories as $category)
                    <div class="col-sm-6 col-md-6 col-lg-3" >
                        <div class="card statistic__item bg-{{$colors[$iColors++]}}">
                            {{--<div class="card statistic__item" style="background-color: #5CAFE066">--}}
                            <a href="{{url('sub')}}/{{$category->id}}">
                                <div class="mx-auto d-block">
                                    <h2 class="number"><i class="text-white {{$category->icon_image}}"></i></h2>
                                    <span class="text-white">{{$category->name}}</span>
                                    <div class="icon">
                                        <i class="text-dark {{$category->icon_image}}"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    @php
                    if ($iColors>4) {
                        $iColors=0;
                    }
                    @endphp
                @endforeach
            </div>
        </div>>
        <!-- END STATISTIC-->
    </div>
</div>
{{-- categories mobile --}}
<div class="card d-block d-sm-none">
    <div class="card-header ">
        <strong class="mx-auto">Registrar gasto </strong>
    </div>
    <div class="card-body">
        @foreach ($categories as $category)
            <a href="{{url('sub/'. $category->id)}}" class="btn btn-block btn-outline-{{$colors[$iColors++]}} btn-lg">{{$category->name}} <span class="{{$category->icon_image}}"></span> </a>
            @php
            if ($iColors>4) {
                $iColors=0;
            }
            @endphp
        @endforeach
    </div>
</div>
{{-- categories mobile --}}
@endsection
