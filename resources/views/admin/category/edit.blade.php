@extends('admin.master')

@section('body')
<div class="row">
   <div class="col-md-12">
     <div class="panel panel-default">
       <div class="panel-heading">
         <h3 class="text-success text-center">Update Category</h3>
       </div>
       <div class="panel-body">
        <h3>{{ Session::get('message') }}</h3>
         <form class="form-horizontal" action="{{ route('update-category') }}" method="post">
           {{ csrf_field() }}
           <div class="form-group">
             <label class="control-label col-md-3">Category Name</label>
             <div class="col-md-9">
               <input type="text" value="{{ $category->category_name }}" name="category_name" class="form-control"/>
               <input type="hidden" value="{{ $category->id }}" name="category_id" class="form-control"/>
             </div>
           </div>
           <div class="form-group">
             <label class="control-label col-md-3">Category Description</label>
             <div class="col-md-9">
               <textarea class="form-control" name="category_description">{{ $category->category_description }}</textarea>
             </div>
           </div>
           <div class="form-group">
             <label class="control-label col-md-3">Publication Status</label>
             <div class="col-md-9">
               <label><input type="radio" {{ $category->publication_status == 1 ? 'checked' : '' }} name="publication_status" value="1">Published</label>
               <label><input type="radio" {{ $category->publication_status == 0 ? 'checked' : ''}} name="publication_status" value="0">Unpublished</label>
             </div>
           </div>
           <div class="form-group">
             <div class="col-md-9 col-md-offset-3">
               <input type="submit" name="btn" class="btn btn-success btn-block" value="Update Category">
             </div>
           </div>
         </form>
       </div>
     </div>
   <div>
</div>
@endsection