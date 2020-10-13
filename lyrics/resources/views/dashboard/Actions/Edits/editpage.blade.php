@extends('dashboard.layouts.app')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          
          <div class="col-sm-12">
            <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">EditPage</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
      
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Page</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post" enctype="multipart/form-data" action="{{route('dashboard.updatepage', $thispage->slug)}}">
              @csrf()

              <div class="col-sm-12">

                @if($errors->any())
                <div class="alert alert-warning">
                  <ul>
                    @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                  </ul>
                </div>
                @endif
                <!-- textarea -->
                <div class="form-group">
                  <label for="exampleInputEmail1">Title</label>
                  <input type="text" name="name" class="form-control" id="exampleInputEmail1" value="{{$thispage->name}}">
                </div>
              </div>
              <form role="form">
                <div class="card-body">
                  <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" name="description" rows="3"> {{$thispage->description}} </textarea>
                      </div>
                  
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Edit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

@endsection