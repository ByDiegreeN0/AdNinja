@extends('adminlte::page')


@section('title', 'Dashboard')

@section('content_header')
    <h1>Payouts</h1>
@stop

@section('content')
<form>
    <fieldset disabled>
        <div class="form-row">

            <div class="form-group col-md-6">
                <label for="inputEmail4">PayPal Email *</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="Email" required value="{{ $PayoutData->paydata_email}}">
            </div>

            <div class="form-group col-md-3">
                <label for="inputPassword4">Name & Last Name *</label>
                <input type="text" class="form-control" id="inputPassword4" placeholder="Name" required value="{{ $PayoutData->paydata_user_name}}">
            </div>

            <div class="form-group col-md-1">
                <label for="inputPassword4">Prefix</label>
                <input type="text" class="form-control" id="inputPassword4" placeholder="+57..." value="{{ $PayoutData->paydata_phonenumber_prefix}}">
            </div>


            <div class="form-group col-md-2">
                <label for="inputPassword4">Phone Number</label>
                <input type="text" class="form-control" id="inputPassword4" placeholder="Phone Number" value="{{ $PayoutData->paydata_phonenumber}}">
            </div>

        </div>
        <div class="form-group">
            <label for="inputAddress">Address *</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" required value="{{ $PayoutData->paydata_address}}">
        </div>
        <div class="form-group">
            <label for="inputAddress2">Address 2</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" value="{{ $PayoutData->paydata_address_2}}">
        </div>
        <div class="form-row">

            <div class="form-group col-md-6">
                <label for="inputState">Country *</label>
                <select id="inputState" class="form-control" required>
                    <option selected>{{ $PayoutData->paydata_country}}</option>
                    <option>...</option>
                </select>
            </div>

            <div class="form-group col-md-4">
                <label for="inputCity">City *</label>
                <input type="text" class="form-control" id="inputCity" required value="{{ $PayoutData->paydata_city}}">
            </div>

            <div class="form-group col-md-2">
                <label for="inputZip">Zip Code</label>
                <input id="disabledTextInput" type="text" class="form-control" id="inputZip" value="{{ $PayoutData->paydata_zip}}">
            </div>
        </div>
    </fieldset>

   <a class="btn btn-success" href="{{ route('payout-edit') }}">Edit Personal Information</a>
</form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
