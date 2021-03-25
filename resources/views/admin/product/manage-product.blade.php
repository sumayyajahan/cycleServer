@extends('admin.master')

@section('body')
<div class="row">
  <div class="col-md-12">
    <div class="panel-default">
      <div class="panel-heading">
        <h3 class="text-success text-center">Manage Product</h3>
      </div>
      <div class="panel-body">
      	<table class="table table-bordered">
      	  <tr class="bg-primary">
      	  	<th>Product Id</th>
      	  	<th>Product Name</th>
            <th>Product Image</th>
            <th>Category Name</th>
            <th>Brand Name</th>
            <th>Product Price</th>
      	  	<th>Product Quantity</th>
      	  	<th>Publication Status</th>
      	  	<th>Action</th>
      	  </tr>
          @php($i=1)
          @foreach($products as $product)
      	  <tr>
            <td>{{ $i++ }}</td>
      	  	<td>{{ $product->product_name }}</td>
            <td><img src="{{ asset($product->product_image) }}" alt="" width="50" height="50" /></td>
            <td>{{ $product->category_name }}</td>
            <td>{{ $product->brand_name }}</td>
      	  	<td>{{ $product->product_price }}</td>
            <td>{{ $product->product_quantity }}</td>
      	  	<td>{{ $product->publication_status == 1 ? 'Published' : 'Unpublished' }}</td>
      	  	<td>
              <a href="{{ route('view-product', ['id' => $product->id ]) }}" class="btn btn-primary btn-xs">
      	  	  	<span class="glyphicon glyphicon-zoom-in"></span>
      	  	  </a>
              @if($product->publication_status == 1)
      	  	  <a href="{{ route('unpublished-product', ['id' => $product->id]) }}" class="btn btn-info btn-xs">
                <span class="glyphicon glyphicon-arrow-up"></span>
              </a>
              @else
              <a href="{{ route('published-product', ['id' => $product->id]) }}" class="btn btn-info btn-xs">
                <span class="glyphicon glyphicon-arrow-down"></span>
              </a>
              @endif
      	  	  <a href="{{ route('edit-product', ['id' => $product->id]) }}" class="btn btn-success btn-xs">
                <span class="glyphicon glyphicon-edit"></span>
              </a>
      	  	  <a href="{{ route('delete-product', ['id' => $product->id]) }}" class="btn btn-danger btn-xs">
                <span class="glyphicon glyphicon-trash"></span>
              </a>
      	  	</td>
      	  </tr>
      	  @endforeach
      	</table>
      </div>
    </div>
  </div>
</div>
@endsection