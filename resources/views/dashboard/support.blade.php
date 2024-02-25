@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Support</h1>
    <p>Do you have any questions or do you have problems with our app, let us know by filling this form</p>
@stop

@section('content')
    <form>
        <div class="form-group">
            <label for="exampleFormControlInput1">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>

        <div class="form-group">
            <label for="exampleFormControlInput1">Subject</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="email´s subject">
        </div>
    
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Messagge</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>

        <input type="submit" value="Send Email" class="btn btn-success">
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script></script>
@stop
