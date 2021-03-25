<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use App\Brand;
use DB;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {   
    	$categories = Category::where('publication_status', 1)->get();
    	$brands = Brand::where('publication_status', 1)->get();

    	return view('admin.product.product', [
            'categories' => $categories,
            'brands' => $brands
    		]);
    }

    public function manageProduct()
    {
    	$products = DB::table('products')
                    ->join('categories', 'products.category_id', '=', 'categories.id')
                    ->join('brands', 'products.brand_id', '=', 'brands.id')
                    ->select('products.*', 'categories.category_name', 'brands.brand_name')
                    ->get();
    	return view('admin.product.manage-product', ['products' => $products]);
    }

    public function saveProduct(Request $request)
    {
    	$productImage = $request->file('product_image');
        $imageName = $productImage->getClientOriginalName();
        $directory = 'product-images/';
        $imageUrl = $directory.$imageName;
        $productImage->move($directory, $imageUrl);

        $product = new Product();
    	$product->category_id = $request->category_id;
    	$product->brand_id = $request->brand_id;
    	$product->product_name = $request->product_name;
    	$product->product_price = $request->product_price;
    	$product->product_quantity = $request->product_quantity;
    	$product->short_description = $request->short_description;
    	$product->long_description = $request->long_description;
        $product->product_image = $imageUrl;
    	$product->publication_status = $request->publication_status;
    	$product->save();

    	return redirect('/product/manage')->with('message', 'Product saved successfully.');
    }

    public function viewProduct($id)
    {
        $product = Product::find($id);
        return view('admin.product.view-product', ['product' => $product]);
    }

    public function unpublishedProduct($id)
    {
        $product = Product::find($id);
        $product->publication_status = 0;
        $product->save();

        return redirect('/product/manage')->with('message', 'Product saved successfully.');
    }

    public function publishedProduct($id)
    {
        $product = Product::find($id);
        $product->publication_status = 1;
        $product->save();

        return redirect('/product/manage')->with('message', 'Product saved successfully.');
    }

    public function editProduct($id)
    {
        $product = Product::find($id);
        $categories = Category::where('publication_status', 1)->get();
        $brands = Brand::where('publication_status', 1)->get();

        
        return view('admin.product.edit-product', [
            'product' => $product,
            'categories' => $categories,
            'brands' => $brands
            ]);
    }

    public function updateProduct(Request $request)
    {
      $productImage = $request->file('product_image');
      

      if($productImage)
      {
         
        $product = Product::find($request->product_id);
        unlink($product->product_image);

        $imageName = $productImage->getClientOriginalName();
        $directory = 'product-images/';
        $imageUrl = $directory.$imageName;
        $productImage->move($directory, $imageUrl);

        $product = new Product();
        $product->category_id = $request->category_id;
        $product->brand_id = $request->brand_id;
        $product->product_name = $request->product_name;
        $product->product_price = $request->product_price;
        $product->product_quantity = $request->product_quantity;
        $product->short_description = $request->short_description;
        $product->long_description = $request->long_description;
        $product->product_image = $imageUrl;
        $product->publication_status = $request->publication_status;

        $product->save();

        return redirect('/product/manage')->with('message', 'Product updated successfully.');



      }

      else
      {
        $product = Product::find($request->product_id);
        $product->category_id = $request->category_id;
        $product->brand_id = $request->brand_id;
        $product->product_name = $request->product_name;
        $product->product_price = $request->product_price;
        $product->product_quantity = $request->product_quantity;
        $product->short_description = $request->short_description;
        $product->long_description = $request->long_description;
        $product->publication_status = $request->publication_status;
        $product->save();

        return redirect('/product/manage')->with('message', 'Product updated successfully.');
      }
    }
 
 public function deleteProduct($id)
    {
        $productById = Product::find($id);
        $productById->delete();
        unlink($productById->product_image);
        
        return redirect('/product/manage')->with('message', 'Product deleted successfully.');
    }



}
