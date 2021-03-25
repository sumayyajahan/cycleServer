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
         		<th>Category Id</th>
         		<th>Category Name</th>
         		<th>Category Description</th>
         		<th>Publication Status</th>
         		<th>Action</th>
         	</tr>
            @foreach($categories as $key => $category)
         	<tr>
         		<td>{{ $key+1 }}</td>
         		<td>{{ $category->category_name }}</td>
         		<td>{{ $category->category_description }}</td>
         		<td>{{ $category->publication_status == 1 ? 'Published' : 'Unpublished' }}</td>
         		<td>
                @if($category->publication_status == 1)
         			<a href="{{ route('unpublished-category', ['id' => $category->id]) }}" class="btn btn-info btn-xs">
         				<span class="glyphicon glyphicon-arrow-up"></span>
         			</a>
                @else
         			<a href="{{ route('published-category', ['id' => $category->id ]) }}" class="btn btn-warning btn-xs">
                        <span class="glyphicon glyphicon-arrow-up"></span>
                    </a>
                @endif
                    <a href="{{route('edit-category',['id'=>$category->id])}}" class="btn btn-success btn-xs">
                        <span class="glyphicon glyphicon-edit"></span>
                    </a>
         			<a href="{{ route('delete-category', ['id' => $category->id ]) }}" class="btn btn-danger btn-xs">
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