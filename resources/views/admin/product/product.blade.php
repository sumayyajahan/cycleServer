@extends('admin.master')

@section('body')
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="text-success text-center">Add Product</h3>
      </div>
      <div class="panel-body">
        <form class="form-horizontal" action="{{ route('save-product') }}" method="post" enctype="multipart/form-data">
           {{ csrf_field() }}
           <div class="form-group">
           	<label class="control-label col-md-3">Category Name</label>
           	<div class="col-md-9">
           	  <select name="category_id" class="form-control">
           	  	<option>---Select Category Name---</option>
           	  	@foreach($categories as $category)
           	  	<option value="{{ $category->id }}">{{ $category->category_name }}</option>
           	  	@endforeach
           	  </select>
           	</div>
           </div>
           <div class="form-group">
           	<label class="control-label col-md-3">Brand Name</label>
           	<div class="col-md-9">
           	  <select name="brand_id" class="form-control">
           	  	<option>---Select Brand Name---</option>
           	  	@foreach($brands as $brand)
           	  	<option value="{{ $brand->id }}">{{ $brand->brand_name }}</option>
           	  	@endforeach
           	  </select>
           	</div>
           </div>
           <div class="form-group">
           	<label class="control-label col-md-3">Product Name</label>
           	<div class="col-md-9">
           	  <input type="text" name="product_name" class="form-control">
           	</div>
           </div>
           <div class="form-group">
           	<label class="control-label col-md-3">Product Price</label>
           	<div class="col-md-9">
           	  <input type="text" name="product_price" class="form-control">
           	  
           	</div>
           </div>
           <div class="form-group">
           	<label class="control-label col-md-3">Product Quantity</label>
           	<div class="col-md-9">
           	  <input type="text" name="product_quantity" class="form-control">
           	  
           	</div>
           </div>
           <div class="form-group">
           	<label class="control-label col-md-3">Short Description</label>
           	<div class="col-md-9">
           	  <textarea class="form-control" name="short_description"></textarea>
           	  
           	</div>
           </div>
           <div class="form-group">
           	<label class="control-label col-md-3">Long Description</label>
           	<div class="col-md-9">
           	  <textarea class="form-control" name="long_description"></textarea>
           	</div>
           </div>
           <div class="form-group">
           	<label class="control-label col-md-3">Product Image</label>
           	<div class="col-md-9">
           	  <input type="file" name="product_image">
           	</div>
           </div>
           <div class="form-group">
           	<label class="control-label col-md-3">Publication Status</label>
           	<div class="col-md-9">
           	  <label><input type="radio" name="publication_status" value="1">Published</label>
           	  <label><input type="radio" name="publication_status" value="0">Unpublished</label>
           	</div>
           </div>
           <div class="form-group">
             <div class="col-md-9 col-md-offset-3">
              <input type="submit" name="btn" class="btn btn-success btn-block" name="Save Product">
             </div>
           </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection