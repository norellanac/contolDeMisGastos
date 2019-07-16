@extends('layouts.dashboardUser')
@section('content')
@section('welcome','Control de usuarios')
<div class="row d-none d-sm-block">
    <div class="col-lg-12">
        <!-- STATISTIC-->
        <div>
            <div class="row">
                @foreach ($subcategories as $category)
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="card statistic__item">
                            <a href="{{url('sub')}}/{{$category->id}}">
                                <div class="mx-auto d-block">
                                    <h2 class="number"><i class="zmdi zmdi-calendar-note"></i></h2>
                                    <span class="desc">{{$category->name}}</span>
                                    <div class="icon">
                                        <i class="zmdi zmdi-calendar-note"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
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
            <a href="{{url('sub/'. 1)}}" class="btn btn-block btn-outline-primary btn-lg">{{$category->name}}</a>
        @endforeach
    </div>
</div>
{{-- categories mobile --}}

@endsection