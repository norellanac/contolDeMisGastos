@php
$colors = array("primary", "secondary", "success", "danger", "warning", "info");
$iColors=1;
@endphp
@extends('layouts.dashboardUser')
@section('content')
@section('welcome','Detalle de compra')
<style media="screen">
.sizeImg {
display: block;
max-width:430px;
max-height:195px;
width: auto;
height: auto;
}
</style>
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
    <div class="col-12 col-xs-12 col-sm-12 col-md-4 mx-auto d-block mt-3 ">
      <div id="carouselExampleControls1" class="carousel slide " data-ride="carousel">
        <div class="carousel-inner">
          @foreach ($products as $product)
          @if ($loop->first)
          <input type="hidden" name="" value="{{$active='active'}}">
          @else
          <input type="hidden" name="" value="{{$active=''}}">
          @endif
          <div class="carousel-item {{$active}}">
            <div class="row mx-auto bg-info">
              <div class="col-12">
                <h5 class="card-title mb-3 text-white mx-auto ">{{$product->name}} -  {{$product->price}}</h5>
              </div>
            </div>
            <div class="mx-auto bg-info">
              <img class="img-fluid mx-auto d-block sizeImg"
              src="{{$product->url_image}}"  width="50%" alt="Card image cap">
              <div class="card-body">
                <form class="" action="{{url('/record/info/')}}" method="post">
                  @csrf
                  <div class="row">
                    <div class="offset-2 col-8">
                      <div class="input-group mb-3">
                        <div class="input-group">
                          <span class="input-group-btn">
                            <button type="button" class="btn btn-danger btn-number"  data-type="minus" data-field="quant[2]">
                              <i class="fa fa-minus"></i>
                            </button>
                          </span>
                          <input type="text" name="quant[2]" class="form-control input-number" value="1" min="1" max="100">
                          <input type="hidden" name="product_id" value="{{$product->id}}">
                          <input type="hidden" name="subcategory_id" value="{{$product->subcategory_id}}">
                          <input type="hidden" name="expense_id" value="{{session('expense')->id}}">
                          <span class="input-group-btn">
                            <button type="button" class="btn btn-success btn-number" data-type="plus" data-field="quant[2]">
                              <i class="fa fa-plus"></i>
                            </button>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class=" offset-1 col-10">
                      <button type="submit" name="button" class="btn btn-primary btn-block"><i class="fa fa-save"></i></button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls1" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon text-info" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls1" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    <div class="col-12 col-xs-12 col-sm-12 col-md-4 mx-auto d-block mt-3 ">
      <div id="carouselExampleControls1" class="carousel slide " data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row mx-auto bg-info">
              <div class="col-12">
                <h5 class="card-title mb-3 text-white mx-auto">Card Image Title</h5>
              </div>
            </div>
            <div class="mx-auto bg-info">
              <img class="img-fluid mx-auto d-block"
              src="https://www.diariofranquicias.com/uploads/s1/11/43/477_360_logo_mc_menu_big_mac.png"  width="50%" alt="Card image cap">
              <div class="card-body">
                <form class="" action="{{url('/record/info/')}}" method="post">
                  @csrf
                  <div class="row">
                    <div class="offset-2 col-8">
                      <div class="input-group mb-3">
                        <div class="input-group">
                          <span class="input-group-btn">
                            <button type="button" class="btn btn-danger btn-number"  data-type="minus" data-field="quant[2]">
                              <i class="fa fa-minus"></i>
                            </button>
                          </span>
                          <input type="text" name="quant[2]" class="form-control input-number" value="1" min="1" max="100">
                          <span class="input-group-btn">
                            <button type="button" class="btn btn-success btn-number" data-type="plus" data-field="quant[2]">
                              <i class="fa fa-plus"></i>
                            </button>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class=" offset-1 col-10">
                      <button type="submit" name="button" class="btn btn-primary btn-block"><i class="fa fa-save"></i></button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="row mx-auto bg-info">
              <div class="col-12">
                <h5 class="card-title mb-3 text-white mx-auto">Card Image Title</h5>
              </div>
            </div>
            <div class="mx-auto bg-info">
              <img class="img-fluid mx-auto d-block"
              src="https://www.diariofranquicias.com/uploads/s1/11/43/477_360_logo_mc_menu_big_mac.png"  width="50%" alt="Card image cap">
              <div class="card-body">
                <form class="" action="{{url('/record/info/')}}" method="post">
                  @csrf
                  <div class="row">
                    <div class="offset-2 col-8">
                      <div class="input-group mb-3">
                        <div class="input-group">
                          <span class="input-group-btn">
                            <button type="button" class="btn btn-danger btn-number"  data-type="minus" data-field="quant[2]">
                              <i class="fa fa-minus"></i>
                            </button>
                          </span>
                          <input type="text" name="quant[2]" class="form-control input-number" value="1" min="1" max="100">
                          <span class="input-group-btn">
                            <button type="button" class="btn btn-success btn-number" data-type="plus" data-field="quant[2]">
                              <i class="fa fa-plus"></i>
                            </button>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class=" offset-1 col-10">
                      <button type="submit" name="button" class="btn btn-primary btn-block"><i class="fa fa-save"></i></button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>

        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls1" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon text-info" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls1" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>

    <div class="col-12 col-xs-12 col-sm-12 col-md-4 mx-auto d-block mt-3 ">
      <div id="carouselExampleControls1" class="carousel slide " data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row mx-auto bg-info">
              <div class="col-12">
                <h5 class="card-title mb-3 text-white mx-auto">Card Image Title</h5>
              </div>
            </div>
            <div class="mx-auto bg-info">
              <img class="img-fluid mx-auto d-block"
              src="https://www.diariofranquicias.com/uploads/s1/11/43/477_360_logo_mc_menu_big_mac.png"  width="50%" alt="Card image cap">
              <div class="card-body">
                <form class="" action="{{url('/record/info/')}}" method="post">
                  @csrf
                  <div class="row">
                    <div class="offset-2 col-8">
                      <div class="input-group mb-3">
                        <div class="input-group">
                          <span class="input-group-btn">
                            <button type="button" class="btn btn-danger btn-number"  data-type="minus" data-field="quant[2]">
                              <i class="fa fa-minus"></i>
                            </button>
                          </span>
                          <input type="text" name="quant[2]" class="form-control input-number" value="1" min="1" max="100">
                          <span class="input-group-btn">
                            <button type="button" class="btn btn-success btn-number" data-type="plus" data-field="quant[2]">
                              <i class="fa fa-plus"></i>
                            </button>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class=" offset-1 col-10">
                      <button type="submit" name="button" class="btn btn-primary btn-block"><i class="fa fa-save"></i></button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="row mx-auto bg-info">
              <div class="col-12">
                <h5 class="card-title mb-3 text-white mx-auto">Card Image Title</h5>
              </div>
            </div>
            <div class="mx-auto bg-info">
              <img class="img-fluid mx-auto d-block"
              src="https://www.diariofranquicias.com/uploads/s1/11/43/477_360_logo_mc_menu_big_mac.png"  width="50%" alt="Card image cap">
              <div class="card-body">
                <form class="" action="{{url('/record/info/')}}" method="post">
                  @csrf
                  <div class="row">
                    <div class="offset-2 col-8">
                      <div class="input-group mb-3">
                        <div class="input-group">
                          <span class="input-group-btn">
                            <button type="button" class="btn btn-danger btn-number"  data-type="minus" data-field="quant[2]">
                              <i class="fa fa-minus"></i>
                            </button>
                          </span>
                          <input type="text" name="quant[2]" class="form-control input-number" value="1" min="1" max="100">
                          <span class="input-group-btn">
                            <button type="button" class="btn btn-success btn-number" data-type="plus" data-field="quant[2]">
                              <i class="fa fa-plus"></i>
                            </button>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class=" offset-1 col-10">
                      <button type="submit" name="button" class="btn btn-primary btn-block"><i class="fa fa-save"></i></button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>

        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls1" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon text-info" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls1" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>


  </div>
</div>

@endsection
@section('sectionJS')
<script type="text/javascript">
//plugin bootstrap minus and plus
//http://jsfiddle.net/laelitenetwork/puJ6G/
$('.btn-number').click(function(e){
  e.preventDefault();

  fieldName = $(this).attr('data-field');
  type      = $(this).attr('data-type');
  var input = $("input[name='"+fieldName+"']");
  var currentVal = parseInt(input.val());
  if (!isNaN(currentVal)) {
    if(type == 'minus') {

      if(currentVal > input.attr('min')) {
        input.val(currentVal - 1).change();
      }
      if(parseInt(input.val()) == input.attr('min')) {
        $(this).attr('disabled', true);
      }

    } else if(type == 'plus') {

      if(currentVal < input.attr('max')) {
        input.val(currentVal + 1).change();
      }
      if(parseInt(input.val()) == input.attr('max')) {
        $(this).attr('disabled', true);
      }

    }
  } else {
    input.val(0);
  }
});
$('.input-number').focusin(function(){
  $(this).data('oldValue', $(this).val());
});
$('.input-number').change(function() {

  minValue =  parseInt($(this).attr('min'));
  maxValue =  parseInt($(this).attr('max'));
  valueCurrent = parseInt($(this).val());

  name = $(this).attr('name');
  if(valueCurrent >= minValue) {
    $(".btn-number[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')
  } else {
    alert('Sorry, the minimum value was reached');
    $(this).val($(this).data('oldValue'));
  }
  if(valueCurrent <= maxValue) {
    $(".btn-number[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')
  } else {
    alert('Sorry, the maximum value was reached');
    $(this).val($(this).data('oldValue'));
  }


});
$(".input-number").keydown(function (e) {
  // Allow: backspace, delete, tab, escape, enter and .
  if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
  // Allow: Ctrl+A
  (e.keyCode == 65 && e.ctrlKey === true) ||
  // Allow: home, end, left, right
  (e.keyCode >= 35 && e.keyCode <= 39)) {
    // let it happen, don't do anything
    return;
  }
  // Ensure that it is a number and stop the keypress
  if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
    e.preventDefault();
  }
});
</script>
@endSection
