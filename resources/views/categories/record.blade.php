@php
$colors = array("primary", "secondary", "success", "danger", "warning", "info");
$iColors=1;
@endphp
@extends('layouts.dashboardUser')
@section('content')
@section('welcome','Control de usuarios')
<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">Credit Card</div>
            <div class="card-body">
                <div class="card-title">
                    <h3 class="text-center title-2">Pay Invoice</h3>
                </div>
                <hr>
                <form action="" method="post" novalidate="novalidate">
                    <div class="form-group">
                        <label for="cc-payment" class="control-label mb-1">Payment amount</label>
                        <input id="cc-pament" name="cc-payment" type="text" class="form-control" aria-required="true" aria-invalid="false" value="100.00">
                    </div>
                    <div class="form-group has-success">
                        <label for="cc-name" class="control-label mb-1">Name on card</label>
                        <input id="cc-name" name="cc-name" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
                            autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                        <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                    </div>
                    <div class="form-group">
                        <label for="cc-number" class="control-label mb-1">Card number</label>
                        <input id="cc-number" name="cc-number" type="tel" class="form-control cc-number identified visa" value="" data-val="true"
                            data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number"
                            autocomplete="cc-number">
                        <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="cc-exp" class="control-label mb-1">Expiration</label>
                                <input id="cc-exp" name="cc-exp" type="tel" class="form-control cc-exp" value="" data-val="true" data-val-required="Please enter the card expiration"
                                    data-val-cc-exp="Please enter a valid month and year" placeholder="MM / YY"
                                    autocomplete="cc-exp">
                                <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                            </div>
                        </div>
                        <div class="col-6">
                            <label for="x_card_code" class="control-label mb-1">Security code</label>
                            <div class="input-group">
                                <input id="x_card_code" name="x_card_code" type="tel" class="form-control cc-cvc" value="" data-val="true" data-val-required="Please enter the security code"
                                    data-val-cc-cvc="Please enter a valid security code" autocomplete="off">

                            </div>
                        </div>
                    </div>
                    <div>
                        <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                            <i class="fa fa-lock fa-lg"></i>&nbsp;
                            <span id="payment-button-amount">Pay $100.00</span>
                            <span id="payment-button-sending" style="display:none;">Sending…</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<button type="button" class="btn btn-secondary mb-1" data-toggle="modal" data-target="#staticModal">
    Static
</button>
<!-- modal static -->
<div class="modal fade" id="staticModal" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true"
 data-backdrop="static">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticModalLabel">Static Modal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    This is a static modal, backdrop click will not close it.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Confirm</button>
            </div>
        </div>
    </div>
</div>
<!-- end modal static -->
@endsection