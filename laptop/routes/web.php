<?php

use Illuminate\Support\Facades\Route;

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
// FRONTEND 
Route::get('/', 'HomeController@index');
Route::get('/login', 'HomeController@login');
Route::get('/trang-chu', 'HomeController@index');
Route::post('/searchajax', 'ProductController@search')->name('searchajax');

// login 
Route::post('login', 'CustomerController@add_customer')->name('add_customer');
Route::post('/loginCustomer', 'CustomerController@login')->name('login_customer');
// CART 
Route::post('/save-cart','CartController@save_cart' );
Route::get('/show-cart','CartController@show_cart' );


// product 
Route::get('/product','ProductController@showProduct');
Route::get('/detail-product/{product_id}','ProductController@detailProduct');

// BACKEND
Route::get('/admin', 'AdminController@index');
Route::get('/dashboard', 'AdminController@show_dashboard');
Route::get('/logOutAdmin', 'AdminController@logOut');
Route::post('admin-dashboard', 'AdminController@dashboard');

// Category Product 
Route::get('/add-category-product', 'CategoryProduct@addCategory');
Route::get('/unactive-category-product/{cate_product_id}', 'CategoryProduct@unActiveCategory');
Route::get('/active-category-product/{cate_product_id}', 'CategoryProduct@activeCategory');
Route::get('/all-category-product', 'CategoryProduct@allCategory');
Route::get('/edit-category-product/{cate_product_id}', 'CategoryProduct@editCategory');
Route::get('/delete-category-product/{cate_product_id}', 'CategoryProduct@deleteCategory');
Route::post('/update-category-product/{cate_product_id}', 'CategoryProduct@updateCategory');
Route::post('/save-category-product', 'CategoryProduct@saveCategory');

// Brand Product 
Route::get('/add-brand-product', 'BrandProduct@addBrand');
Route::get('/all-brand-product', 'BrandProduct@allBrand');
Route::post('/save-brand-product', 'BrandProduct@saveBrand');
Route::post('/update-brand-product/{brand_product_id}', 'BrandProduct@updateBrand');
Route::get('/edit-brand-product/{brand_product_id}', 'BrandProduct@editBrand');
Route::get('/delete-brand-product/{brand_product_id}', 'BrandProduct@deleteBrand');

// Product 

Route::get('/add-product', 'ProductController@addProduct');
Route::get('/all-product', 'ProductController@allProduct');
Route::post('/save-product', 'ProductController@saveProduct');
Route::post('/update-product/{product_id}', 'ProductController@updateProduct');
Route::get('/edit-product/{product_id}', 'ProductController@editProduct');
Route::get('/delete-product/{product_id}', 'ProductController@deleteProduct');

// Image Items 
Route::get('/imageItem', 'imageItemController@show');
Route::get('/image-detail/{product_id}', 'imageItemController@showImageDetail');
Route::get('/image-delete/{id}', 'imageItemController@deleteImage');
Route::post('add-image/{product_id}', 'imageItemController@addImage');