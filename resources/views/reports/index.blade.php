@php
$colors = array("primary", "secondary", "success", "danger", "warning", "info");
$iColors=1;
@endphp
@extends('layouts.dashboardUser')
@section('content')
  @section('welcome','Detalle de gastos')

  @if (session('message'))
    <div class="sufee-alert alert with-close alert-{{ session('alert') }} alert-dismissible fade show">
      <span class="badge badge-pill badge-{{ session('alert') }}">{{ session('alert') }}</span>
      {{ session('message') }}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  @endif

  <div class="card">
    <div class="card-header">
      <strong>Consultar gastos:</strong>
    </div>
    <form class="" action="{{url('data')}}" method="post">
      @csrf
      <div class="card-body card-block row">
        <div class="has-success form-group col-xs-12 col-sm-12 col-md-5">
          <label for="date1" class=" form-control-label">Fecha Inicial</label>
          <input type="date" id="date1" name="fromDate" class="is-valid form-control-success form-control">
        </div>
        <div class="has-warning form-group col-xs-12 col-sm-12 col-md-5">
          <label for="date2" class=" form-control-label">Fecha Final</label>
          <input type="date" id="date2" name="toDate" class="is-valid form-control form-control-primary">
        </div>
        <div class="col-xs-12 col-sm-12 col-md-2 form-group"><br>
          <button type="submit" name="button" class="mt-2 btn btn-success btn-block"> <i class="fa fa-table"></i> Consultar </button>
        </div>
      </div>
    </form>
  </div>


  {{--
  <div class="row">
  <div class="col-md-12">
  <div class="table-responsive table-responsive-table-data2">
  <table class="table table-table-data2 table-hover">
  <thead>
  <tr>
  <th>#</th>
  <th>Monto</th>
  <th>Descripción</th>
  <th>Fecha</th>
</tr>
</thead>
<tbody>
@php $i=1; @endphp
@foreach ($data as $record)
<tr class="tr-shadow">
<td>{{$i++ }}</td>
<td>Q. {{$record->total * -1}}</td>
<td class="desc">{{$record->subCat->name}}</td>
<td>{{$record->created_at->modify('-6 hours')->format('d F -  H:i')}}</td>
</tr>
<tr class="spacer"></tr>
@endforeach
</tbody>
</table>
</div>
<!-- END DATA TABLE -->
</div>
</div>
--}}
<div class="row">
  <div class=" col-lg-6">
    <!-- TOP CAMPAIGN-->
    <div class="top-campaign">
      <h3 class="title-3 m-b-30">Totales</h3>
      <div class="table-responsive">
        <table class="table table-top-campaign">
          <tbody>
            @foreach ($totals as $record)
              <tr>
                <td> {{$record->category}}</td>
                <td> Q. {{$record->total * -1}} </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
    <!--  END TOP CAMPAIGN-->
  </div>

  <div class="col-md-6">
    <div class="top-campaign">
      <div class="col-md-12">
        <h3 class="title-3 m-b-30">Detalle</h3>
        <div class="table-responsive table-responsive-table-data2">
          <table class="table table-table-data2 table-hover">
            <thead>
              <tr>
                <th>#</th>
                <th>Monto</th>
                <th>Descripción</th>
                <th>Fecha</th>
              </tr>
            </thead>
            <tbody>
              @php $i=1; @endphp
              @foreach ($data as $record)
                <tr class="tr-shadow">
                  <td>{{$i++ }}</td>
                  <td>Q. {{$record->total * -1}}</td>
                  <td class="desc">{{$record->subCat->name}}</td>
                  <td>{{$record->created_at->modify('-6 hours')->format('d F -  H:i')}}</td>
                </tr>
                <tr class="spacer"></tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <!-- END DATA TABLE -->
      </div>
      <!-- END DATA TABLE -->
    </div>
  </div>
</div>


@endsection
