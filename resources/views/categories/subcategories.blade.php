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
                            <a href="{{url('sub')}}/{{$category->id}}">
                                <div class="mx-auto d-block">
                                    <h2 class="number"><i class="text-white {{$category->category->icon_image}}"></i></h2>
                                    <span class="text-white">{{$category->name}}</span>
                                    <div class="icon">
                                        <i class="text-dark {{$category->category->icon_image}}"></i>
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
            <a href="{{url('sub/'. 2)}}" class="btn btn-block btn-outline-{{$colors[$iColors++]}} btn-lg">{{$category->name}} <span class="{{$category->category->icon_image}}"></span>  </a>
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