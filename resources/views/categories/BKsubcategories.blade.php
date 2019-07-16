@extends('layouts.dashboardUser')
@section('content')
@section('welcome','Control de usuarios')
<div class="row">
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
        <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="card statistic__item">
                        <a href="{{url('sub')}}">
                            <div class="mx-auto d-block">
                                <h2 class="number"><i class="zmdi zmdi-calendar-note"></i></h2>
                                <span class="desc">Nombrre</span>
                                <div class="icon">
                                    <i class="zmdi zmdi-calendar-note"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="card statistic__item">
                        <a href="{{url('sub')}}">
                            <div class="mx-auto d-block">
                                <h2 class="number"><i class="zmdi zmdi-calendar-note"></i></h2>
                                <span class="desc">Nombrre</span>
                                <div class="icon">
                                    <i class="zmdi zmdi-calendar-note"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="card statistic__item">
                        <a href="{{url('sub')}}">
                            <div class="mx-auto d-block">
                                <h2 class="number"><i class="zmdi zmdi-calendar-note"></i></h2>
                                <span class="desc">Nombrre</span>
                                <div class="icon">
                                    <i class="zmdi zmdi-calendar-note"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="card statistic__item">
                        <a href="{{url('sub')}}">
                            <div class="mx-auto d-block">
                                <h2 class="number"><i class="zmdi zmdi-calendar-note"></i></h2>
                                <span class="desc">Nombrre</span>
                                <div class="icon">
                                    <i class="zmdi zmdi-calendar-note"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- END STATISTIC-->
    </div>
</div>
@endsection