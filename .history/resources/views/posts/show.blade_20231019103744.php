@extends('layout.web-layout')

@section('content')

<div class="row my-4">
	<div class="col-lg-8 mx-auto p-1" style="background-color: #1f386a;">
	  	<!-- <a href="https://www.buildwithphp.com/">
	  		<img src="https://www.buildwithphp.com/front/images/logo.webp" class="img-fluid">
	  	</a> -->
          <lottie-player src="https://lottie.host/272b60dd-462d-42a3-8ed6-fec4143633d6/X4FxBascRI.json" background="transparent"  speed="1"  style="width: 300px; height: 300px;" loop  autoplay></lottie-player>
	</div>
</div>

<div class="row">
	<div class="col-lg-2"></div>
	<div class="col-lg-8 my-4">
		<div class="float-start">
			<h4>View Post</h4>
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

			<div class="mb-3">
				<h6>Title:</h6>
				<p>{{ $post->title }}</p>
			</div>

			<div class="mb-3">
				<h6>Description:</h6>
				<p>{{ $post->description }}</p>
			</div>

	</div>
	<div class="col-lg-2"></div>
</div>

@endsection