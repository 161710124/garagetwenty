<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kategori;
use App\merk;
use App\produk;
use App\foto_produk;
use App\checkout;
use App\blog;
use App\cart;
use Laratrust\LaratrustFacade as Laratrust;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Laratrust::hasRole('admin'))return $this->adminDashboard();
        if(Laratrust::hasRole('member'))return $this->memberDashboard();
        // return view('home');
    }
     protected function adminDashboard()
    {
        return view('test');
    }
    protected function memberDashboard()
    {
        $kategori = kategori::all();
        $merk = merk::all();
        $produk = produk::all();
        $blog = blog::all();
        $foto = foto_produk::all();
        $cart = cart::all();
        return view('frontend.index',compact('kategori','merk','produk','blog','foto','cart'));
    }
}
