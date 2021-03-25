<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [
   'uses' => 'BicycleController@index',
    'as' => '/'
	]);

Route::get('/bicycles', [
    'uses' => 'BicycleController@bicycles',
     'as' => 'bicycles'
	]);

Route::get('/parts', [
    'uses' => 'BicycleController@parts',
     'as' => 'parts'
	]);

Route::get('/accessories', [
    'uses' => 'BicycleController@accessories',
     'as' => 'accessories'
	]);

Route::get('/cart', [
    'uses' => 'BicycleController@cart',
     'as' => 'cart'
	]);



Route::get('/single/{id}', [
    'uses' => 'BicycleController@single',
     'as' => 'single'
    ]);

Route::get('/category',[
    'uses' => 'CategoryController@index',
    'as' => 'add-category'
    ]); 

Route::get('/mangecategory',[
    'uses' => 'CategoryController@manageCategory',
    'as' => 'manage-category'
    ]); 

Route::post('/newcategory',[
    'uses' => 'CategoryController@saveCategory',
    'as' => 'new-category'
    ]);

Route::get('/unpublishedcategory/{id}',[
    'uses' => 'CategoryController@unpublishedCategory',
    'as' => 'unpublished-category'
    ]);

Route::get('/publishedcategory/{id}',[
    'uses' => 'CategoryController@publishedCategory',
    'as' => 'published-category'
    ]);

Route::get('/edit/{id}',[
    'uses' => 'CategoryController@editCategory',
    'as' => 'edit-category'
    ]);

Route::post('/update',[
    'uses' => 'CategoryController@updateCategory',
    'as' => 'update-category'
    ]);

Route::get('/delete/{id}',[
    'uses' => 'CategoryController@deleteCategory',
    'as' => 'delete-category'
    ]);



Route::get('/brand/add',[
    'uses' => 'BrandController@index',
    'as' => 'add-brand'
    ]);

Route::get('/brand/manage',[
    'uses' => 'BrandController@manageBrand',
    'as' => 'manage-brand'
    ]);

Route::post('/brand/save',[
    'uses' => 'BrandController@saveBrand',
    'as' => 'new-brand'
    ]);

Route::get('/unpublishedbrand/{id}',[
     'uses' => 'BrandController@unpublishedBrand',
     'as' => 'unpublished-brand'
    ]);

Route::get('/publishedbrand/{id}',[
     'uses' => 'BrandController@publishedBrand',
     'as' => 'published-brand'
    ]);

Route::get('/Brandedit/{id}',[
     'uses' => 'BrandController@editBrand',
     'as' => 'edit'
    ]);

Route::post('/update',[
     'uses' => 'BrandController@updateBrand',
     'as' => 'update'
    ]);

Route::get('/Branddelete/{id}',[
     'uses' => 'BrandController@deleteBrand',
     'as' => 'delete'
    ]);

Route::get('/product/add',[
     'uses' => 'ProductController@index',
     'as' => 'add-product'
    ]);

Route::get('/product/manage',[
     'uses' => 'ProductController@manageProduct',
     'as' => 'manage-product'
    ]);

Route::post('/product/save',[
     'uses' => 'ProductController@saveProduct',
     'as' => 'save-product'
    ]);

Route::get('/product/view/{id}',[
     'uses' => 'ProductController@viewProduct',
     'as' => 'view-product'
    ]);

Route::get('/product/unpublished/{id}',[
     'uses' => 'ProductController@unpublishedProduct',
     'as' => 'unpublished-product'
    ]);

Route::get('/product/published/{id}',[
     'uses' => 'ProductController@publishedProduct',
     'as' => 'published-product'
    ]);

Route::get('/product/edit/{id}',[
     'uses' => 'ProductController@editProduct',
     'as' => 'edit-product'
    ]);

Route::post('/product/update',[
     'uses' => 'ProductController@updateProduct',
     'as' => 'update-product'
    ]);

Route::get('/product/delete/{id}',[
     'uses' => 'ProductController@deleteProduct',
     'as' => 'delete-product'
    ]);

Route::get('/subcategory',[
    'uses' => 'CategoryController@subCategory',
    'as' => 'new-subcategory'
    ]);

Route::get('/subcategory',[
    'uses' => 'CategoryController@addSubCategory',
    'as' => 'add-subcategory'
    ]);

Route::get('/managesubcategory',[
    'uses' => 'CategoryController@manageSubCategory',
    'as' => 'manage-subcategory'
    ]);

Route::post('/savesubcategory',[
    'uses' => 'CategoryController@saveSubCategory',
    'as' => 'save-subcategory'
    ]);

Route::post('/cart/add',[
    'uses' => 'CartController@addToCart',
    'as' => 'add-to-cart'
    ]); 

Route::get('/cart/show',[
    'uses' => 'CartController@showCart',
    'as' => 'show-cart'
    ]);

Route::get('/cart/delete/{id}',[
    'uses' => 'CartController@deleteCart',
    'as' => 'delete-cart'
    ]);

Route::post('/cart/update',[
    'uses' => 'CartController@updateCart',
    'as' => 'update-cart'
    ]);

Route::get('/checkout/',[
    'uses' => 'CheckoutController@index',
    'as' => 'checkout'
    ]);

Route::post('/checkout/new-customer',[
    'uses' => 'CheckoutController@saveCustomer',
    'as' => 'new-customer'
    ]);

Route::get('/checkout/shipping',[
    'uses' => 'CheckoutController@shippingInfo',
    'as' => 'show-shipping'
    ]);

Route::get('/ajax-email-check/{id}',[
    'uses' => 'CheckoutController@ajaxEmailCheck',
    'as' => 'ajax-email-check'
    ]);

Route::post('/contact',[
    'uses' => 'CheckoutController@contactForm',
    'as' => 'contact'
    ]);

Route::resource('income', 'IncomeController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
