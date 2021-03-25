@extends('admin.master')

@section('body')
<div class="row">
  <div class="col-md-12">
  	<div class="panel panel-default">
  	 <div class="panel-heading">
  	 	<h3 text-success text-center>Update Brand</h3>
  	 </div>
  	 <div class="panel-body">
  	 	<form class="form-horizontal" action="{{ route('update') }}" method="post">
  	 	   {{ csrf_field() }}
  	 	   <div class="form-group">
  	 	     <label class="control-label col-md-3">Brand Name</label>
  	 	     <div class="col-md-9">
  	 	      <input type="text" value="{{ $brand->brand_name }}" name="brand_name" class="form-control">
            <input type="hidden" value="{{ $brand->id }}" name="brand_id" class="form-control">
  	 	     </div>
  	 	   </div>
  	 	   <div class="form-group">
  	 	   	 <label class="control-label col-md-3">Brand Description</label>
  	 	   	 <div class="col-md-9">
  	 	   	   <textarea class="form-control" name="brand_description">{{ $brand->brand_description }}
  	 	   	   </textarea>
  	 	   	 </div>
  	 	   </div>
  	 	   <div class="form-group">
  	 	   	 <label class="control-label col-md-3">Publication Status</label>
  	 	   	 <div class="col-md-9">
  	 	   	 	<label><input type="radio" {{ $brand->publication_status == 1? 'checked': '' }} name="publication_status" class="form-control" value="1">Published</label>
  	 	   	 	<label><input type="radio" {{ $brand->publication_status == 0? 'checked': '' }}  name="publication_status" class="form-control" value="0">Unpublished</label>
  	 	   	 </div>
  	 	   </div>
  	 	   <div class="form-group">
  	 	   	 <div class="col-md-9 col-md-offset-3">
  	 	   	 	<input type="submit" name="btn" class="btn btn-success btn-block" value="Update Brand">
  	 	   	 </div>
  	 	   </div>
  	 	</form>
  	 </div>
  	</div>
  </div>
</div>
@endsection