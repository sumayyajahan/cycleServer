@extends('admin.master')

@section('body')
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="text-success text-center">Add Brand</h3>
      </div>
      <div class="panel-body">
       <form class="form-horizontal" action="{{ route('new-brand') }}" method="post">
          {{ csrf_field() }}
          <div class="form-group">
           <label class="control-label col-md-3">Brand Name</label>
           <div class="col-md-9">
             <input type="text" name="brand_name" class="form-control">
           </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3">Brand Description</label>
            <div class="col-md-9">
              <textarea class="form-control" name="brand_description"></textarea>
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
           <input type="submit" name="btn" class="btn btn-success btn-block" value="Save Brand">
          </div>
         </div>
       </form>
      </div>
    </div>
  </div>
</div>
@endsection