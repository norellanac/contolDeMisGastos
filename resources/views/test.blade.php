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
  @if (session('message'))
  <div class="col-12">
    <div class="sufee-alert alert with-close alert-{{ session('alert') }} alert-dismissible fade show">
      <span class="badge badge-pill badge-{{ session('alert') }}">{{ session('alert') }}</span>
      {{ session('message') }}
      <a href="{{'/'}}" class="btn btn-link"> <i class="fa fa-home"></i> Ir a inicio</a>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  </div>
  @endif
  <div class="col-lg-6" >
    <div class="au-card au-card--no-shadow au-card--no-pad m-b-40 au-card--border" >
      <div class="au-card-title" style="background-image:url('images/bg-title-01.jpg');">
        <div class="bg-overlay bg-overlay--blue" ></div>
        <h3>
          <i class="zmdi zmdi-account-calendar"></i>Ingresos:@if($in ) {{$in}} @endif</h3>
          <a class="au-btn-plus bg-primary" href="{{url('cat/incomes')}}">
            <i class="zmdi zmdi-plus"></i>
          </a>
        </div>
        <div class="au-task js-list-load au-task--border bg-overlay--blue"  >
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

            <i class="zmdi zmdi-account-calendar"></i>Gastos: @if($out ){{$out}} @endif</h3>

            <a class="au-btn-plus bg-danger" href="{{url('cat')}}">
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
              <h2 class="number">@if($in ){{$in- $out}}@endif</h2>
              <span class="desc">members online</span>
              <div class="icon">
                <i class="zmdi zmdi-account-o"></i>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="statistic__item statistic__item--orange">
              @if($in )
                <h2 class="number">Q. {{$in- $out}}</h2>
              @endif
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
              <h2 class="number">$1,060,38</h2>
              <span class="desc">total earnings</span>
              <div class="icon">
                <i class="zmdi zmdi-money"></i>
              </div>
            </div>
            <!-- END CHART-->
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
            <!-- CHART PERCENT-->
            <div class="chart-percent-2">
              <h3 class="title-3 m-b-30">Disponible Q. {{$in+ $out}}</h3>
              <div class="chart-wrap">
                <canvas id="chartIncExp"></canvas>
                <div id="chartjs-tooltip">
                  <table></table>
                </div>
              </div>
              <div class="chart-info">
                <div class="chart-note">
                  <span class="dot dot--red"></span>
                  <span>Gastos</span>
                </div>
                <div class="chart-note">
                  <span class="dot dot--green"></span>
                  <span>Ingresos</span>
                </div>
              </div>
            </div>
            <!-- END CHART PERCENT-->
          </div>
          <div class="col-md-6 col-lg-4">
            <!-- CHART-->
            <div class="statistic-chart-1">
              <h3 class="title-3 m-b-30">Top Gastos</h3>
              <div class="chart-wrap">
                <canvas id="chartSubCat"></canvas>
              </div>
              <div class="statistic-chart-1-note">
                <span class="big"><i class="fa fa-bar-chart-o"></i></span>
                <span>Categorias</span>
              </div>
            </div>
            <!-- END CHART-->
          </div>
          <div class="col-md-6 col-lg-4">
            <!-- TOP CAMPAIGN-->
            <div class="top-campaign">
              <h3 class="title-3 m-b-30">Ultimos gastos</h3>
              <div class="table-responsive">
                <table class="table table-top-campaign">
                  @if($data)
                  <tbody>
                    @foreach ($data as $data)
                    <tr>
                      <td>{{$data->subCat->name}}</td>
                      <td>$ {{$data->total}}</td>
                      @auth
                      <td>
                        <form class="" action="{{url('/record/expense/')}}" method="POST">
                           @csrf
                           @method('DELETE')
                          <input type="hidden" name="id" value="{{$data->id}}">
                          <button type="submit" name="button" class="btn btn-danger"><i class="zmdi zmdi-delete"></i></button>
                        </form>
                      </td>
                      @endauth
                    </tr>
                    @endforeach
                  </tbody>

                  @endif
                </table>
              </div>
              @auth
                <a class="btn btn-block btn-info" href="{{url('/data')}}">Ver detalles</a>
              @endauth
            </div>
            <!-- END TOP CAMPAIGN-->
          </div>

        </div>
      </div>
    </section>
    <!-- END STATISTIC CHART-->
    @endsection
    @section('sectionJS')
    <script type="text/javascript">
    //escala de colores porcentual JS
    function perc2color(perc) {
      var r, g, b = 0;
      if(perc < 50) {
        r = 255;
        g = Math.round(5.1 * perc);
      }
      else {
        g = 255;
        r = Math.round(510 - 5.10 * perc);
      }
      var h = r * 0x10000 + g * 0x100 + b * 0x1;
      return '#' + ('000000' + h.toString(16)).slice(-6);
    }
    //escala de colores porcentual JS
    try {
      //WidgetChart 5
      var ctx = document.getElementById("chartSubCat");
      if (ctx) {
        ctx.height = 220;
        var myChart = new Chart(ctx, {
          type: 'bar',
          data: {
            labels: [
              @foreach ($chartSubData as $dataGrafico)
              '{{ $dataGrafico->name }}',
              @endforeach
            ],
            datasets: [
              {
                label: "Registros",
                data: [@foreach ($chartSubData as $dataGrafico)
                  {{ $dataGrafico->total  }},
                  @endforeach
                ],
                borderColor: "transparent",
                borderWidth: "0",
                backgroundColor: [
                  @foreach ($chartSubData as $dataGrafico)
                  perc2color({{ $dataGrafico->total * 100 / (sizeOf($chartSubData) +1) }} ),
                  @endforeach

                ],
              }
            ]
          },
          options: {
            maintainAspectRatio: true,
            legend: {
              display: false
            },
            scales: {
              xAxes: [{
                display: false,
                categoryPercentage: 1,
                barPercentage: 0.65
              }],
              yAxes: [{
                display: false
              }]
            }
          }
        });
      }

    } catch (error) {
      console.log(error);
    }


    try {

      // Percent Chart 2
      var ctx = document.getElementById("chartIncExp");
      if (ctx) {
        ctx.height = 209;
        var myChart = new Chart(ctx, {
          type: 'doughnut',
          data: {
            datasets: [
              {
                label: "My First dataset",
                data: [{{$in}}, {{$out * -1}}],
                backgroundColor: [
                  '#6fbf60',
                  '#fa4251'
                ],
                hoverBackgroundColor: [
                  '#6fbf60',
                  '#fa4251'
                ],
                borderWidth: [
                  0, 0
                ],
                hoverBorderColor: [
                  'transparent',
                  'transparent'
                ]
              }
            ],
            labels: [
              'Q.',
              'Q.'
            ]
          },
          options: {
            maintainAspectRatio: false,
            responsive: true,
            cutoutPercentage: 87,
            animation: {
              animateScale: true,
              animateRotate: true
            },
            legend: {
              display: false,
              position: 'bottom',
              labels: {
                fontSize: 14,
                fontFamily: "Poppins,sans-serif"
              }

            },
            tooltips: {
              titleFontFamily: "Poppins",
              xPadding: 15,
              yPadding: 10,
              caretPadding: 0,
              bodyFontSize: 16,
            }
          }
        });
      }

    } catch (error) {
      console.log(error);
    }
    </script>
    @endSection
