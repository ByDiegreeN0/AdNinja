@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Edit Payout Data</h1>
@stop

@section('content')
    <form method="POST" action="{{ route('payout-edit.update') }}">

        <div class="form-row">

            @csrf
            @method('PATCH')

            <div class="form-group col-md-6">
                <label for="inputEmail4">PayPal Email *</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="paydata_email" required
                    value="{{ $PayoutData->paydata_email }}">
            </div>

            <div class="form-group col-md-3">
                <label for="inputPassword4">Name & Last Name *</label>
                <input type="text" class="form-control" id="inputPassword4" placeholder="Name" name="paydata_user_name"
                    required value="{{ $PayoutData->paydata_user_name }}">
            </div>

            <div class="form-group col-md-1">
                <label for="inputPassword4">Prefix</label>
                <input type="text" class="form-control" id="inputPassword4" placeholder="+57..."
                    name="paydata_phonenumber_prefix" value="{{ $PayoutData->paydata_phonenumber_prefix }}">
            </div>


            <div class="form-group col-md-2">
                <label for="inputPassword4">Phone Number</label>
                <input type="number" class="form-control" id="inputPassword4" placeholder="Phone Number"
                    name="paydata_phonenumber" value="{{ $PayoutData->paydata_phonenumber }}">
            </div>


        </div>
        <div class="form-group">
            <label for="inputAddress">Address *</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" required
                name="paydata_address" value="{{ $PayoutData->paydata_address }}">
        </div>
        <div class="form-group">
            <label for="inputAddress2">Address 2</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor"
                name="paydata_address_2" value="{{ $PayoutData->paydata_address_2 }}">
        </div>
        <div class="form-row">

            <div class="form-group col-md-6">
                <label for="inputState">Country *</label>
                <select id="inputState" class="form-control" name="paydata_country" required>
                    <option value="{{ $PayoutData->paydata_country }}" selected>{{ $PayoutData->paydata_country }}</option>
                    <option >Choose...</option>
                    <option>
                        @foreach ( $countries as $country )
                            <option value="{{ $country['name']['common'] }}">{{ $country['name']['common'] }}</option>
                        @endforeach
                    </option>
                </select>
            </div>

            <div class="form-group col-md-4">
                <label for="inputCity">City *</label>
                <input type="text" class="form-control" id="inputCity" name="paydata_city"required
                    value="{{ $PayoutData->paydata_city }}">
            </div>

            <div class="form-group col-md-2">
                <label for="inputZip">Zip Code</label>
                <input id="disabledTextInput" type="number" class="form-control" id="inputZip" name="paydata_zip"
                    value="{{ $PayoutData->paydata_zip }}">
            </div>
        </div>

        <input type="submit" class="btn btn-success" value="Save Changes">

    </form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')


@stop
