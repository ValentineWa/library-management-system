@extends('dashboard.layouts.app')
@section('content')
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">

				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-left">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">AddPost</li>
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
							<h3 class="card-title">Add Post</h3>
						</div>
						<!-- /.card-header -->
						<!-- form start -->
						<form role="form" method="post" enctype="multipart/form-data" action="{{route('dashboard.savepost')}}">
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
									<input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Enter post title">
								</div>
							</div>

							<!--editor section-->
							<section class="content">
								<div class="row">
									<div class="col-md-12">
										<div class="card card-outline card-info">
											<div class="card-header">
												<h3 class="card-title">
													<label for="exampleInputEmail1">Description</label>
												</h3>
												<!-- tools box -->
												<div class="card-tools">
													<button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse" data-toggle="tooltip"
													title="Collapse">
													<i class="fas fa-minus"></i></button>
													<button type="button" class="btn btn-tool btn-sm" data-card-widget="remove" data-toggle="tooltip"
													title="Remove">
													<i class="fas fa-times"></i></button>
												</div>
												<!-- /. tools -->
											</div>
											<!-- /.card-header -->
											<div class="card-body pad">
												<div class="mb-3">
													<textarea class="textarea" id="txtCont" name="description" placeholder="Place some text here"
													style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
											
											</div>

										</div>
									</div>
								</div>
								<!-- /.col-->
							</div>
							<!-- ./row -->
						</section>
						<!--end editor section-->

					</div>
					<!-- /.card-body -->

					<div class="card-footer">
						<button type="submit" class="btn btn-primary">Add</button>
					</div>
				</form>
			</div>
			<!-- /.card -->

		</div>
		<!--/.col (left) -->
		<!-- right column -->

		<!--/.col (right) -->
	</div>
	<!-- /.row -->
</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>



@endsection