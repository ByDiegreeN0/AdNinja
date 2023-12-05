@extends('layouts.app')
<!-- @extends('layouts.AdBanner') -->

@section('navbar')

<div class="container-fluid vh-100 d-flex justify-content-center">

    <div style="width: 728px; height: 90px;" class="bg-success m-3"> <!-- 728 x 90  -->
    </div>
</div>


<div class="container-fluid vh-100 d-flex">

    <div class="col-md-3 bg-light">
        <div style="width: 160px; height: 600px;" class="d-flex justify-content-center bg-success"> <!-- 160 x 600 -->

        </div>
    </div>


    <div class="col-md-6 main-container bg-light">
        <div class="main-container bg-light d-flex flex-column align-items-center">
            <h1>AdNinja</h1>
            <p>Do you want to earn money with our app? <a href="{{ route('register') }}">Sign Up</a></p>

            <div style="width: 300px; height: 250px;" class="bg-success"> <!-- 300 x 250 -->
                <p>hola</p>
            </div>
        </div>


    </div>

    <div class="col-md-3 bg-light">
        <div style="width: 160px; height: 600px;" class="d-flex justify-content-center bg-success"> <!-- 160 x 600 -->

        </div>
    </div>
</div>



@endsection