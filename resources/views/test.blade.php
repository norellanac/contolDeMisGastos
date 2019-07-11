@extends('layouts.dashboardUser')
@section('content')
            @section('welcome')

	            @if (Auth::check() && is_null(Auth::user()->country_id))
	               <script type="text/javascript">
                       window.location = "{{ url('/users/create') }}";//here double curly bracket
                   </script>
	            @elseif (Auth::check() && !is_null(Auth::user()->country_id))
                    Hola, {{ Auth::user()->name }}
	            @else
                   Bienvenido
	            @endif
            @endsection
            <div class="row">
                                    <div class="col-lg-6" >
                                        <div class="au-card au-card--no-shadow au-card--no-pad m-b-40 au-card--border" >
                                            <div class="au-card-title" style="background-image:url('images/bg-title-01.jpg');">
                                                <div class="bg-overlay bg-overlay--blue"></div>
                                                <h3>
                                                    <i class="zmdi zmdi-account-calendar"></i>Ingresos: 8,437</h3>
                                                <a class="au-btn-plus" href="{{url('cat')}}">
                                                    <i class="zmdi zmdi-plus"></i>
                                                </a>
                                            </div>
                                            <div class="au-task js-list-load au-task--border bg-overlay--blue" >
                                                <div class="au-task__title">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6" >
                                        <div class="au-card au-card--no-shadow au-card--no-pad m-b-40 au-card--border" >
                                            <div class="au-card-title" style="background-image:url('images/bg-title-02.jpg');">
                                                <div class="bg-overlay bg-overlay-- " style="background-color:rgba(233, 127, 0, 0.9);"></div>
                                                <h3>
                                                    <i class="zmdi zmdi-account-calendar"></i>Gastos: 4,579 </h3>
                                                <a class="au-btn-plus bg-danger" href="{{url('sub')}}">
                                                    <i class="zmdi zmdi-plus"></i>
                                                </a>
                                            </div>
                                            <div class="au-task js-list-load au-task--border bg-overlay--"  style="background-color:rgba(233, 127, 0, 0.9);">
                                                <div class="au-task__title">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
            <!-- STATISTIC-->
            <section class="statistic statistic2 d-none">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-3">
                            <div class="statistic__item statistic__item--green">
                                <h2 class="number">10,368</h2>
                                <span class="desc">members online</span>
                                <div class="icon">
                                    <i class="zmdi zmdi-account-o"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="statistic__item statistic__item--orange">
                                <h2 class="number">388,688</h2>
                                <span class="desc">items sold</span>
                                <div class="icon">
                                    <i class="zmdi zmdi-shopping-cart"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="statistic__item statistic__item--blue">
                                <h2 class="number">1,086</h2>
                                <span class="desc">this week</span>
                                <div class="icon">
                                    <i class="zmdi zmdi-calendar-note"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="statistic__item statistic__item--red">
                                <h2 class="number">$1,060,386</h2>
                                <span class="desc">total earnings</span>
                                <div class="icon">
                                    <i class="zmdi zmdi-money"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END STATISTIC-->

            <!-- STATISTIC CHART-->
            <section class="statistic-chart">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <!-- CHART-->
                            <div class="statistic-chart-1">
                                <h3 class="title-3 m-b-30">chart</h3>
                                <div class="chart-wrap">
                                    <canvas id="widgetChart5"></canvas>
                                </div>
                                <div class="statistic-chart-1-note">
                                    <span class="big">10,368</span>
                                    <span>/ 16220 items sold</span>
                                </div>
                            </div>
                            <!-- END CHART-->
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <!-- TOP CAMPAIGN-->
                            <div class="top-campaign">
                                <h3 class="title-3 m-b-30">top campaigns</h3>
                                <div class="table-responsive">
                                    <table class="table table-top-campaign">
                                        <tbody>
                                            <tr>
                                                <td>1. Australia</td>
                                                <td>$70,261.65</td>
                                            </tr>
                                            <tr>
                                                <td>2. United Kingdom</td>
                                                <td>$46,399.22</td>
                                            </tr>
                                            <tr>
                                                <td>3. Turkey</td>
                                                <td>$35,364.90</td>
                                            </tr>
                                            <tr>
                                                <td>4. Germany</td>
                                                <td>$20,366.96</td>
                                            </tr>
                                            <tr>
                                                <td>5. France</td>
                                                <td>$10,366.96</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END TOP CAMPAIGN-->
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <!-- CHART PERCENT-->
                            <div class="chart-percent-2">
                                <h3 class="title-3 m-b-30">chart by %</h3>
                                <div class="chart-wrap">
                                    <canvas id="percent-chart2"></canvas>
                                    <div id="chartjs-tooltip">
                                        <table></table>
                                    </div>
                                </div>
                                <div class="chart-info">
                                    <div class="chart-note">
                                        <span class="dot dot--blue"></span>
                                        <span>products</span>
                                    </div>
                                    <div class="chart-note">
                                        <span class="dot dot--red"></span>
                                        <span>Services</span>
                                    </div>
                                </div>
                            </div>
                            <!-- END CHART PERCENT-->
                        </div>
                    </div>
                </div>
            </section>
            <!-- END STATISTIC CHART-->

            
@endsection 