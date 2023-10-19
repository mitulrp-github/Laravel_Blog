@extends('layout.web-layout')

@section('content')

<div class="row my-4">
	<div class="col-lg-2 mx-auto p-1" style="background-color: #1f386a;">
	  	<a href="https://www.buildwithphp.com/">
	  		<img src="https://www.buildwithphp.com/front/images/logo.webp" class="img-fluid">
	  	</a>
	</div>
</div>

<div class="row">
	<div class="col-lg-2"></div>
	<div class="col-lg-8 my-4">
		<div class="float-start">
			<h4>Add New Post</h4>
		</div>
		<div class="float-end">
			<a class="btn btn-sm btn-warning" href="{{ route('posts.index') }}"><i class="fa fa-chevron-left"></i> Back</a>
		</div>
	</div>
	<div class="col-lg-2"></div>
</div>

<div class="row">
	<div class="col-lg-2"></div>
	<div class="col-lg-8">
		<form method="post" action="{{ route('posts.store') }}">
			@csrf
			<div class="mb-3">
				<label class="form-label fw-bold">Title</label>
				<input type="text" class="form-control" placeholder="Enter Title" name="title" required>
			</div>
			<div class="mb-3">
				<label class="form-label fw-bold">Description</label>
				<textarea class="form-control" placeholder="Description..." name="description" required></textarea>
			</div>
			<div class="mb-3">
				<button type="Save" class="btn btn-sm btn-success">
					<i class="fa fa-floppy-o"></i> Submit
				</button>
			</div>
		</form>
	</div>
	<div class="col-lg-2"></div>
</div>

@endsection