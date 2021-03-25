<?php

namespace App\Http\Controllers;

use App\Category;
use App\SubCategory;
use DB;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
    	return view('admin.category.category');
    }

    public function manageCategory()
    {
        $categories = Category::all();
        return view('admin.category.manage', ['categories' => $categories]);
    }

    

    public function saveCategory(Request $request)
    {
    	$category = new Category();
    	$category->category_name = $request->category_name;
    	$category->category_description = $request->category_description;
    	$category->publication_status = $request->publication_status;
    	$category->save();

    	return redirect('/mangecategory')->with('message', 'Category info saved successfully');
    }

    public function unpublishedCategory($id)
    {
       $category = Category::find($id);
       $category->publication_status = 0;
       $category->save();

       return redirect('/mangecategory')->with('message', 'Category unpublished');
    }
    
    public function publishedCategory($id)
    {
        $category = Category::find($id);
        $category->publication_status = 1;
        $category->save();

        return redirect('/mangecategory')->with('message', 'Category published');
    }
    
    public function editCategory($id)
    {
        $category = Category::find($id);
        return view('admin.category.edit', ['category' => $category]);
    }

    public function updateCategory(Request $request)
    {
        $category = Category::find($request->category_id);
        $category->category_name = $request->category_name;
        $category->category_description = $request->category_description;
        $category->publication_status = $request->publication_status;
        $category->save();
        return redirect('/mangecategory')->with('message', 'Category updated');
    }

    public function deleteCategory($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect('/mangecategory')->with('message', 'Category deleted');
    }

    public function addSubCategory()
    {  
       $categories = Category::all();
       return view('admin.subcategory.subcategory', ['categories' => $categories]);
    }

    public function manageSubCategory()
    {  
       //$category = Category::where('id', category_id)->first();
       $category = DB::table('categories')
                   ->leftJoin('sub_categories', 'categories.id', '=', 'sub_categories.category_id')
                   ->first();
       /*echo "<pre>";
       dd($category);
       echo "<pre>";*/

       $subcategories = SubCategory::all();
       return view('admin.subcategory.submanage', [
        'category' => $category,
        'subcategories' => $subcategories
        ]);
    }

    public function saveSubCategory(Request $request)
    {
       $subcategory = new SubCategory();
       $subcategory->category_id = $request->category_id;
       $subcategory->subcategory_name = $request->subcategory_name;
       $subcategory->subcategory_description = $request->subcategory_description;
       $subcategory->publication_status = $request->publication_status;
       $subcategory->save();

       return redirect('/managesubcategory')->with('message', 'SubCategory info saved successfully');
    }

}
