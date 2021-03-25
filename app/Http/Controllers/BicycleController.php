<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use App\SubCategory;
use Illuminate\Http\Request;

class BicycleController extends Controller
{
    public function index()
    {   
        $categories = Category::where('publication_status', 1)->get();
        $products = Product::where('publication_status', 1)->get();
    	
        return view('frontend.home.home', [
            'categories' => $categories,
            'products' => $products
            ]);
    }

    public function bicycles()
    {   
        $categories = Category::where('publication_status', 1)->get();
        $products = Product::where('publication_status', 1)->get();

    	return view('frontend.bicycles.bicycles', [
            'categories' => $categories,
            'products' => $products
            ]);
    }

    public function parts()
    {
    	return view('frontend.parts.parts');
    }

    public function accessories($id)
    {   
        $categories = Category::where('publication_status', 1)->get();
        $products = Product::where('category_id', $id)->get();

    	return view('frontend.accessories.accessories',[
            'categories' => $categories,
            'products' => $products
            ]);
        
    }

    public function cart()
    {
        return view('frontend.cart.cart');
    }

    public function single($id)
    {   
        $product = Product::find($id);
        return view('frontend.single.single', ['product' => $product
               
            ]);
    }
}
