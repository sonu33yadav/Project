<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
<div class="form-title">
	<h4>Add News :</h4>
</div>
<div class="form-body">
	<form method="post" action="{{ url('addproducts') }}" enctype="multipart/form-data"> 
		{{ csrf_field() }}
		<!-- <input type="text" class="form-control" name="csrf_token" value="{{ csrf_token() }}"> -->
		<div class="form-group">
		<label for="exampleInputname">name</label>
		<input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="name"> 
		</div>
		<div class="form-group">
		<label for="exampleInputproducts">products</label>
		<input type="text" name="products" class="form-control" id="exampleInputproducts" placeholder="products"> 
		</div>
		<div class="form-group">
		<label for="exampleInputFile">File input</label> 
		<input type="file" name="image" id="exampleInputFile">
		</div> 
		<div class="form-group">
		<label for="exampleInputproducts_detail">products_detail</label>
		<input type="text" name="products_detail" class="form-control" id="exampleInputproducts_detail" placeholder="products_detail"> 
		</div>

		<button type="submit" class="btn btn-default">Submit</button> 
	</form> 
</div>
</div>