@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Support</h1>
@stop

@section('content')
<section style="background-color: #eee;" >
    <div class="container py-5">

        <div class="row">

            <div class="col-md-6 col-lg-7 col-xl-8">

                <ul class="list-unstyled">
                    <li class="d-flex justify-content-between mb-4">
                        <img src="{{ asset('assets/icon/AdNinja.ico') }}" alt="avatar" class="rounded-circle d-flex align-self-start me-4 m-2 shadow-1-strong" width="60">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between p-3">
                                <p class="fw-bold mb-0">AdNinja Support</p>
                            </div>
                            <div class="card-body">
                                <p class="mb-0">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                    labore et dolore magna aliqua.
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="d-flex justify-content-between mb-4">
                        <div class="card w-100">
                            <div class="card-header d-flex justify-content-between p-3">
                                <p class="fw-bold mb-0">YOU</p>
                            </div>
                            <div class="card-body">
                                <p class="mb-0">
                                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                    laudantium.
                                </p>
                            </div>
                        </div>
                        <img src="{{ asset('assets/icon/user.png') }}" alt="avatar" class="rounded-circle d-flex align-self-start ms-3 m-2 shadow-1-strong" width="60">
                    </li>
                  
                    <li class="bg-white mb-3">
                        <div class="form-outline">
                            <textarea class="form-control" id="textAreaExample2" rows="4"></textarea>
                            <label class="form-label" for="textAreaExample2">Message</label>
                        </div>
                    </li>
                    <button type="button" class="btn btn-success btn-rounded float-end">Send</button>
                </ul>

            </div>

        </div>

    </div>
</section>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!');
</script>
@stop