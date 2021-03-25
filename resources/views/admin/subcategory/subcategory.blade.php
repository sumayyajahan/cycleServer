@extends('admin.master')

@section('body')
<div class="row">
   <div class="col-md-12">
     <div class="panel panel-default">
       <div class="panel-heading">
         <h3 class="text-success text-center">Add Sub Category</h3>
       </div>
       <div class="panel-body">
         <form class="form-horizontal" action="{{ route('save-subcategory') }}" method="post">
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
             <label class="control-label col-md-3">Sub Category Name</label>
             <div class="col-md-9">
               <input type="text" name="subcategory_name" class="form-control"/>
             </div>
           </div>
           <div class="form-group">
             <label class="control-label col-md-3">Sub Category Description</label>
             <div class="col-md-9">
               <textarea class="form-control" name="subcategory_description"></textarea>
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
               <input type="submit" name="btn" class="btn btn-success btn-block" value="Save Sub Category">
             </div>
           </div>
         </form>
       </div>
     </div>
   <div>
</div>
@endsection