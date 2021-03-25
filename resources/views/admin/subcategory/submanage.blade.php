@extends('admin.master')

@section('body')
<div class="row">
   <div class="col-md-12">
     <div class="panel panel-default">
       <div class="panel-heading">
         <h3 class="text-success text-center">Manage Category</h3>
       </div>
       <div class="panel-body">
         <table class="table table-bordered">
         	<tr class="bg-primary">
         		<th>Subcategory ID</th>
         		<th>Category Name</th>
         		<th>Subcategory Name</th>
         		<th>Subcategory Description</th>
         		<th>Publication Status</th>
         		<th>Action</th>
         	</tr>
            @foreach($subcategories as $key => $subcategory)
         	<tr>
         		
         		<td>{{ $key+1 }}</td>
         		<td>{{ $category->category_name }}</td>
         		<td>{{ $subcategory->subcategory_name }}</td>
         		<td>{{ $subcategory->subcategory_description }}</td>
         		<td>{{ $subcategory->publication_status == 1 ? 'Published' : 'Unpublished' }}</td>
         		<td>
                
         			<a href="" class="btn btn-info btn-xs">
         				<span class="glyphicon glyphicon-arrow-up"></span>
         			</a>
                
         			<a href="" class="btn btn-warning btn-xs">
                        <span class="glyphicon glyphicon-arrow-up"></span>
                    </a>
               
                    <a href="" class="btn btn-success btn-xs">
                        <span class="glyphicon glyphicon-edit"></span>
                    </a>
         			<a href="" class="btn btn-danger btn-xs">
         				<span class="glyphicon glyphicon-trash"></span>
         			</a>
         		</td>
         	</tr>
            @endforeach
         </table>
       </div>
     </div>
   <div>
</div>

@endsection