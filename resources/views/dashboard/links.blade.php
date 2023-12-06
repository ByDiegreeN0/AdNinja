@extends('adminlte::page')


@section('title', 'Dashboard')

@section('content_header')
<h1>Links</h1>
@stop



@section('content')

<div>
  <canvas id="myChart" height="260"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


<script>
  const ctx = document.getElementById('myChart');

  const labels = @json($labels);
  const data = @json($data);

  new Chart(ctx, {
    type: 'line',
    data: {
      labels: labels,
      datasets: [{
        label: '# of Views',
        data: data,
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      },
      maintainAspectRatio: false, 
      responsive: true 
    }
  });
</script>


@yield('charts')
 



<!-- Button trigger modal -->
<button type="button" class="btn btn-success mb-4" data-toggle="modal" data-target="#exampleModal">
  Create Link
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create Link</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="insert-link-form" method="post">
          @csrf
          <div class="form-group">
            <label for="exampleInputEmail1">Link Name</label>
            <input type="text" class="form-control" name="url_name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="link name" required>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Link URL</label>
            <input type="url" class="form-control" name="url_old_url" id="exampleInputPassword1" placeholder="Link URL" required>
          </div>

          <button type="submit" class="btn btn-success">Add Link</button>
        </form>
      </div>
    </div>
  </div>
</div>

<table id="links-table" class="table table-striped" style="width:100%">
  <thead>
    <tr>
      <th>URL Name</th>
      <th>Short URL</th>
      <th>Target URL</th>
      <th>Views</th>
      <th>Created At</th>
      <th>Eliminar</th>
    </tr>
  </thead>

  <tbody>

    @foreach ($links as $Link )


    <tr>
      <td>{{ $Link->url_name }}</td>
      <td>{{ $Link->url_new_url }}</td>
      <td><a target="_blank" href="{{ $Link->url_old_url }}">Target</a></td>
      <td>{{ $Link->url_views }}</td>
      <td>{{ $Link->created_at }}</td>
      <td>
        <form action="{{ url('/dashboard/links/'.$Link->url_id) }}" method="post" class="delete-form" id="delete-form">
          @csrf
          @method('DELETE')
          <input type="submit" value="Delete" class="btn btn-danger">
        </form>
      </td>
    </tr>
    @endforeach

  </tbody>


  @stop

  @section('css')
  <link rel="stylesheet" href="/css/admin_custom.css">
  @stop

  @section('js')

  <script>
    // Script DataTables

    $(document).ready(function() {

      $('#links-table').DataTable({
        "paging": true,
        "searching": true,
      });



      // alert para eliminar
      $('.delete-form').submit(function(e) {
        e.preventDefault();

        Swal.fire({
          title: "Are you sure?",
          text: "You won't be able to revert this!",
          icon: "warning",
          showCancelButton: true,
          showConfirmButton: true,
          confirmButtonColor: "#3085d6",
          cancelButtonColor: "#d33",
          confirmButtonText: "Yes, delete it!"
        }).then((result) => {
          if (result.isConfirmed) {
            Swal.fire({
              title: "Deleted!",
              text: "Your file has been deleted.",
              icon: "success"
            });

            this.submit();
          }
        });
      })
    });
  </script>


  @stop