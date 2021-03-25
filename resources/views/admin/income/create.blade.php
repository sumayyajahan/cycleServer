@extends('admin.master')

@section('title')
Income
@endsection

@section('body')
<div class="row">
   <div class="col-md-12">
     <div class="panel panel-default">
       <div class="panel-heading">
         <h3 class="text-success text-center">Insert New Income</h3>
       </div>


       
       <div class="panel-body">
         <form class="form-horizontal" action="{{ route('new-category') }}" method="post">
           {{ csrf_field() }}
           <div class="form-group">
             <label class="control-label col-md-3">Income Amount</label>
             <div class="col-md-9">
               <input type="text" name="category_name" class="form-control"/>
             </div>
           </div>
           <div class="form-group">
             <label class="control-label col-md-3">Income Description</label>
             <div class="col-md-9">
               <textarea class="form-control" name="category_description"></textarea>
             </div>
           </div>
           <div class="form-group">
             <label class="control-label col-md-3">Date</label>
             <div class="col-md-9">
             <div class="form-group">
            <div class='input-group date' id='datetimepicker1'>
               <input type='text' class="form-control" />
               <span class="input-group-addon">
               <span class="glyphicon glyphicon-calendar"></span>
               </span>
            </div>
            </div>

             </div>
           </div>
           <div class="form-group">
             <div class="col-md-9 col-md-offset-3">
               <input type="submit" name="btn" class="btn btn-success btn-block" value="Save Category">
             </div>
           </div>
         </form>
       </div>
     </div>
   <div>
   <script type="text/javascript">
         $(function () {
             $('#datetimepicker1').datetimepicker();
         });
   </script>
</div>
@endsection



