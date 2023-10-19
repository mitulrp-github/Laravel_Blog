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
			<h4>Laravel 9 CRUD Application</h4>
		</div>
		<div class="float-end">
			<a class="btn btn-sm btn-success" href="{{ route('posts.create') }}"><i class="fa fa-plus"></i> Add New Post</a>
		</div>
	</div>
	<div class="col-lg-2"></div>
</div>

<div class="row">
	<div class="col-lg-2"></div>
	<div class="col-lg-8">
         @if ($message = Session::get('success'))
         <div class="alert alert-success">
         	{{ $message }}
         </div>
         @endif
		<table class="table table-bordered table-hover">
			<thead>
				<tr class="table-secondary">
					<th>#</th>
					<th>Title</th>
					<th>Description</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($posts as $post)
				<tr>
					<td>{{ ++$i }}</td>
					<td>{{ $post->title }}</td>
					<td>{{ $post->description }}</td>
					<td>
						<a class="btn btn-sm btn-outline-secondary" href="{{ route('posts.show',$post->id) }}">
							<i class="fa fa-eye"></i> View
						</a>
						<a class="btn btn-sm btn-outline-primary" href="{{ route('posts.edit',$post->id) }}">
							<i class="fa fa-pencil-square-o"></i> Edit
						</a>
						<form method="post" action="{{ route('posts.destroy',$post->id) }}" class="d-inline">
							@csrf
							@method('DELETE')
							<button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('are you sure do you want to delete this record')">
								<i class="fa fa-trash-o"></i> Delete
							</button>
						</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>

		{!! $posts->links() !!}

	</div>
	<div class="col-lg-2"></div>
</div>

@endsection