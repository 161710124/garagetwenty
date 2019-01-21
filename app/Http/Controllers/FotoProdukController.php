<?php

namespace App\Http\Controllers;

use App\foto_produk;
use App\produk;
use Illuminate\Http\Request;
use file;

class FotoProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $foto = foto_produk::all();
        return view('fotoproduk.index',compact('foto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $produk = produk::all();
        return view('fotoproduk.create',compact('produk'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('foto')) {
            foreach ($request->foto as $foto) {
                $filename = $foto->getClientOriginalName();
                $destinationPath = public_path() . DIRECTORY_SEPARATOR . '/assets/img';
                $foto->move($destinationPath, $filename);
                $galeri = foto_produk::create($request->except('foto'));
                $galeri->foto = $filename;
                $galeri->save();
            }
        }
        return redirect()->route('fp.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\foto_produk  $foto_produk
     * @return \Illuminate\Http\Response
     */
    public function show(foto_produk $foto_produk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\foto_produk  $foto_produk
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produk = produk::findOrFail($id);
        return view('fotoproduk.edit',compact('produk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\foto_produk  $foto_produk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, foto_produk $foto_produk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\foto_produk  $foto_produk
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $foto = foto_produk::findOrFail($id);
        $foto->delete();
        return redirect()->route('fp.index');
    }
}
