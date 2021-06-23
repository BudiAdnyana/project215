<title>Product</title>
@extends('template')

@section('content')

<div class="container">
	<br>
	<h2>Input Data Product</h2>
	<br>
	<form action="{{route('product.save')}}" method="post">

		@csrf
		
		<div class="form-group">
			<label>Name</label>
			<input type="text" name="name" class="form-control">
		</div>
		<div class="form-group">
			<label>Description</label>
			<textarea name="description" class="form-control"></textarea>
		</div>
		<div class="form-group">
			<label>Price</label>
			<input type="number" name="price" class="form-control">
		</div>
		<div class="form-group">
			<label>Category</label>
			<select name="category_id" class="form-control">
				<option value="1">Processor</option>
				<option value="2">RAM</option>
			</select>
		</div>
		<br>
		<input type="submit" name="submit" value="Save Data" class="btn btn-primary">
		<a href="{{route('product.index')}}" class="btn btn-secondary">Cancel</a>
	</form>	
</div>




@endsection