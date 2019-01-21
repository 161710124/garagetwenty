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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('user', function () {
//     return view('frontend.index');
// });

Auth::routes();

Route::group(['prefix'=>'admin', 'middleware'=>['auth','role:admin']], function () {
Route::resource('kategorii', 'KategoriController');
Route::resource('merks', 'MerkController');
Route::resource('produks', 'ProdukController');
Route::resource('fp', 'FotoProdukController');
Route::resource('blog','BlogController');
Route::resource('chart','CartController');
Route::resource('check','CheckoutController');
});




Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'FrontendController@index')->name('frontend');
Route::get('/singleblog/{id}','FrontendController@blog')->name('singleblog');
Route::get('/indexblog','FrontendController@indexblog')->name('indexblog');
Route::get('/detailproduk/{slug}','FrontendController@detailproduk');
Route::get('/indexproduk','FrontendController@indexproduk')->name('indexproduk');
Route::get('/indexproduk/kategori/{slug}','FrontendController@kategoriproduk');
Route::get('search', 'FrontendController@search')->name('search');
Route::get('cart', 'FrontendController@cart')->name('cart');	
Route::post('/barang', 'CartController@store');

// Route::get('/test', function () {
//     return view('test');
// });


Route::get('/testdata', function () {
    return view('Frontend.test');
});