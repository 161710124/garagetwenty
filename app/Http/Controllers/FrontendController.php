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
use search;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function blog($id)
        {
            $blog = blog::findOrFail($id);
            $kategori = kategori::all();
            return view('Frontend.blog',compact('kategori','blog'));
        }

        public function detailproduk($slug)
        {
            $produk = produk::whereSlug($slug)->first();
            $kategori = kategori::all();
            // $foto = foto_produk::all();
            return view('Frontend.detailproduk',compact('produk','kategori'))->with('produk',$produk);
        }

    public function indexblog()
        {
            $kategori = kategori::all();
            $indexblog = blog::all();
            return view('Frontend.index-blog',compact('kategori','indexblog'));
        }

        public function indexproduk()
        {
            $kategori = kategori::all();
            $foto = foto_produk::all();
            $produk = produk::all();
            return view('Frontend.allproduk',compact('kategori','foto','produk'));
        }

    public function index()
    {
        $kategori = kategori::all();
        $merk = merk::all();
        $produk = produk::all();
        $blog = blog::all();
        $foto = foto_produk::all();
        return view('Frontend.index',compact('kategori','merk','produk','blog','foto'));
    }

    // public function kategoriproduk($slug)
    // {
    //     $kategori = kategori::all();
    //     $produk = produk::all();
    //     $categori = kategori::whereSlug($slug)->first();
    //     return view('Frontend.allproduk',compact('kategori','produk','categori'));
    // }
    public function kategoriproduk(kategori $kategori)
    {
        // $kategori = kategori::all();
        $produk = $kategori->produk()->latest()->paginate(5);
        $kategori = Kategori::all();
        // $categori = kategori::whereSlug($slug)->first();
        return view('Frontend.allproduk',compact('produk','kategori'));
    }
    public function cart()
    {        
        $produk = produk::orderBy('created_at')->paginate(5);;
        $kategori = kategori::all();
        $merk = merk::all();
        $blog = blog::all();
        $foto = foto_produk::all();
        $cart = cart::all();
        return view('Frontend.cart',compact('produk','kategori','merk','blog','foto_produk','cart'));
    }

    public function search( Request $req){
        if($req->search == ""){
            $cart = cart::all();
            $produk = search::paginate(2);
            return view ('Frontend.search',compact('produk','cart'));
        }else{
            $cart = cart::all();
            $produk = produk::where('nama_produk', 'LIKE', '%' . $req->search . '%')->paginate(2);
            $produk->appends($req->only('search'));
            $blog = blog::all();
            $merk = merk::all();
            $kategori = kategori::all();
            return view('Frontend.search',compact('produk','blog','merk','kategori','cart'));
        }
    }

    // public function search(Request $request){
    //     $search = $request->get('search');
    //     $produk = produk::where('nama_produk','LIKE','%'.$search.'%')->paginate(5);
    //     return view('Frontend.allproduk',compact('produk'));
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
