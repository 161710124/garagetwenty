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
// Route::resource('chart','CartController');
Route::resource('cek','CheckoutController');
});




Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'FrontendController@index')->name('frontend');
Route::get('/singleblog/{id}','FrontendController@blog')->name('singleblog');
Route::get('/indexblog','FrontendController@indexblog')->name('indexblog');
Route::get('/detailproduk/{produk}','FrontendController@detailproduk');
Route::get('/indexproduk','FrontendController@indexproduk')->name('indexproduk');
Route::get('/indexproduk/kategori/{kategori}','FrontendController@kategoriproduk');
Route::get('search', 'FrontendController@search')->name('search');
Route::get('cart', 'FrontendController@cart')->name('cart');	
Route::post('/barang', 'CartController@store');

Route::group(['middleware'=>'auth'],function(){
    Route::get('/add-cart/{produk_id}', function( $produk_id,\Illuminate\Http\Request $request){
        // $produk = \App\Product::find($id_product);
        $exist = \App\cart::where('user_id', \Auth::user()->id)->where('produk_id',$produk_id)->first();
        if($exist){
            $exist->jumlah = $exist->jumlah + 1;
            $exist->save(); 
        }else{    
            $data = new \App\cart;
            $data->user_id = \Auth::User()->id;
            $data->produk_id = $produk_id;
            $data->jumlah = 1;
            $data->save();
       
        }
        return redirect()->back();
    });    

    Route::get('cart/{user_id}', function ($user_id) {
        $cart = \App\cart::where('user_id', $user_id)->get();
        $kategori = \App\kategori::all();
        return view('Frontend.cart', compact('cart','kategori'));
    });

    Route::get('cart/delete/{id}', function ($id) {
        $cart = \App\cart::find($id)->delete();
        return redirect()->back();
    });

    Route::post('cart/edit/{user_id}', function ( \Illuminate\Http\Request $request, $user_id) {
        for($i = 0; $i < count($request->id); $i++){
            $cart = \App\cart::find($request->id[$i]);
            $cart->jumlah = $request->jumlah[$i];
            $cart->save();
        }

        return redirect()->back();
    });

Route::get('check/{user_id}', function ($user_id) {
        $checkout = \App\checkout::where('user_id', $user_id)->get();
        $kategori = \App\kategori::all();
        $cart = \App\cart::all();
        return view('Frontend.checkout', compact('checkout','kategori','cart'));
    });

Route::post('checkout/{user_id}',function( \Illuminate\Http\Request $request, $user_id){
        $request->validate([
            'nama' => 'required|',
            'email' => 'required|',
            'no_telp' => 'required|',
            'alamat' => 'required|',
            'kota' => 'required|',
            'provinsi' => 'required|',
            'kodepos' => 'required|'
        ]);
        // dd(json_decode($request->chart));
        foreach(json_decode($request->chart) as $data){

            $custom = new \App\checkout;
            $custom->nama = $request->nama;
            $custom->email = $request->email;
            $custom->no_telp = $request->no_telp;
            $custom->alamat = $request->alamat;
            $custom->kota = $request->kota;
            $custom->provinsi = $request->provinsi;
            $custom->kodepos = $request->kodepos;
            $custom->jumlah = $data->jumlah;
            $custom->catatan = $request->catatan;
            $custom->produk_id = $data->produk_id;
            $custom->user_id = \Auth::user()->id;

           $custom->save(); 
        }

        $del = \App\cart::where('user_id', $user_id)->delete();

        return redirect()->route('home');
    });
});





























Route::get('/testdata', function () {
    return view('Frontend.test');
});
// Route::get('/test', function () {
//     return view('test');
// });