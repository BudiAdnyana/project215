<title>Category</title>
@extends('template')

@section('content')

<div class="container">
	<br>
	<h2>Input Data Category</h2>
	<br>
	<form action="{{route('category.save')}}" method="post">

		@csrf
		
		<div class="form-group">
			<label>Name</label>
			<input type="text" name="name" class="form-control">
		</div>
		<br>
		<input type="submit" name="submit" value="Save Data" class="btn btn-primary">
		<a href="{{route('category.index')}}" class="btn btn-secondary">Cancel</a>
	</form>	
</div>




@endsection