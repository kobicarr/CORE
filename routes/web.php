<?php
use App\Product;
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
    'uses' => 'HomeController@index',
    'as' => 'home'
]);

Auth::routes();

Route::get('/home', 'HomeController@index');


//categories routes

Route::get('/categories/{catSlug}', [
    'uses' => 'CategoriesController@showCategory',
    'as' => 'category'
]);
Route::get('/categories', [
    'uses' => 'CategoriesController@showAll',
    'as' => 'categories'
]);


//Product route
Route::get('/newest', [
    'uses' => 'ProductController@newest',
    'as' => 'newest'
]);
Route::get('/products/{proSlug}', [
    'uses' => 'ProductController@showProduct',
    'as' =>  'product'
]);

//cart routes
Route::get('/shopping-cart', [
    'uses' => 'CartController@showCart',
    'as' => 'cart'
]);

//search route
Route::post('search/categories/',[
    'uses' => 'CategoriesController@search',
    'as' => 'categories.search'
]);

//contact route
Route::get('/contact', [
    'uses' => 'HomeController@contact',
    'as' => 'contact'
]);

//companies routes

Route::get('/companies', [
    'uses' => 'CompaniesController@show',
    'as' => 'companies'
]);

Route::get('/companies/{comSlug}', [
    'uses' => 'CompaniesController@company',
    'as' => 'company'
]);

//orderd products route
Route::get('/orders', [
    'uses' => 'OrdersController@show',
    'as' => 'orders'
]);

