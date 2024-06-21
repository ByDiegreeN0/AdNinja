@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Referrals</h1>
@stop

@section('content')
    <div class="row">

        <div class="col-sm-3">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">User Referral Link</h5>
                <p class="card-text"><a href="">TempLinks</a></p>
              </div>
            </div>
          </div>


        <div class="col-sm-3">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Referrals Amount</h5>
              <p class="card-text">5</p>
            </div>
          </div>
        </div>

        <div class="col-sm-3">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Referral Monthly Incomes</h5>
                <p class="card-text">$ 50.000</p>
              </div>
            </div>
          </div>


        
        <div class="col-sm-3">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Referral Total Incomes</h5>
              <p class="card-text"># 500.000</p>
            </div>
          </div>
        </div>
      </div>

      <table class="table display" id="links-table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">User</th>
            <th scope="col">Incomes</th>
            <th scope="col">Referral Date</th>
          </tr>
        </thead>
        <tbody>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
        </tbody>
      </table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    
<script>
    $(document).ready(function() {

        $('#links-table').DataTable({
        "paging": true,
        "searching": true,
        });
});
</script>
@stop