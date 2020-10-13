@extends('dashboard.layouts.app')
@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Genres</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Genres</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">

           @if(session('message'))
           <p class="alert alert-success">{{session('message')}}</p>
           @endif
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No.</th>
                  <th>Name</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
              @foreach($genres as $genre)
              <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$genre->name}}</td>
                <td>
                  <a href="{{url('dashboard/editgenre', $genre->slug)}}" class="btn btn-info btn-xs">Edit</a>
                  <a class="btn btn-danger btn-xs">Delete</a>
                </td>
              </tr>
              @endforeach
            </tbody>
                <tfoot>
                <tr>
                  <th>No.</th>
                  <th>Name</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection