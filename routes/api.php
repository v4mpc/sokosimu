<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



Route::post('login', 'API\AndroidController@login');
Route::post('register', 'API\AndroidController@register');
Route::post('facebook', 'API\AndroidController@facebook');
Route::post('google', 'API\AndroidController@google');





Route::middleware('auth:api')->group(function (){

    Route::get('categories', 'API\AndroidController@indexCategory');
    Route::get('categories/{id}', 'API\AndroidController@showCategory');
    Route::get('products', 'API\AndroidController@indexProduct');
    Route::get('products/{id}', 'API\AndroidController@showProduct');
    Route::post('products', 'API\AndroidController@storeProduct')->name('image.upload');
    Route::put('products/{id}', 'API\AndroidController@updateProduct');
    Route::get('profile/', 'API\AndroidController@profile');
    Route::resource('wishlists','API\WishlistController');
    Route::get('customer/products','API\AndroidController@customerProducts');
    

});
