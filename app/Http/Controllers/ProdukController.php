<?php

namespace App\Http\Controllers;

use App\produk;
use App\merk;
use App\kategori;
use Yajra\DataTables\Html\Builder;
use Yajra\Datatables\Datatables;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Builder $htmlBuilder)
    {
        // $produk = produk::all();
        // return view('produk.index', compact('produk'));
        if ($request->ajax()) {
        $produk = produk::with('kategori','merk');
        return Datatables::of($produk)
        ->addColumn('action',function($produk){
            return view('datatable._action',[
                'model' => $produk,
                'form_url' => route('produks.destroy', $produk->id),
                'edit_url'  => route('produks.edit', $produk->id),
            ]);
        })->make(true);
        }
        $html = $htmlBuilder
        ->addColumn(['data' => 'nama_produk', 'name'=>'nama_produk', 'title'=>'Nama produk'])
        ->addColumn(['data' => 'harga', 'name'=>'harga', 'title'=>'harga'])
        ->addColumn(['data' => 'stock', 'name'=>'stock', 'title'=>'stock'])
        ->addColumn(['data' => 'kode_barang', 'name'=>'kode_barang', 'title'=>'kode barang'])
        ->addColumn(['data' => 'kategori.nama_kategori', 'name'=>'kategori.nama_kategori', 'title'=>'kategori'])
        ->addColumn(['data' => 'merk.nama_merk', 'name'=>'merk.nama_merk', 'title'=>'merk'])
        ->addColumn(['data' => 'action', 'name'=>'action', 'title'=>'Aksi', 'orderable'=>false, 'searchable'=>false]);
        return view('produk.index')->with(compact('html'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $produk = produk::all();
        $kategori = kategori::all();
        $merk = merk::all();
        return view('produk.create',compact('kategori','merk'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $produk = new produk;
        $produk->nama_produk = $request->nama_produk;
        $produk->harga = $request->harga;
        $produk->stock = $request->stock;
        $produk->kode_barang = $request->kode_barang;
        $produk->slug = str_slug($request->nama_produk,'-');
        $produk->kategori_id = $request->kategori_id;
        $produk->merk_id = $request->merk_id;
       
        // dd($product);  
        $produk->save();
        return redirect()->route('produks.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function show(produk $produk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produk = produk::findOrFail($id);
        $kategori = kategori::all();
        $merk = merk::all();
        return view('produk.edit',compact('produk','kategori','merk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
        'nama_produk' => 'required',
        'harga' => 'required',
        'stock'=>'required',
        'kode_barang' => 'required',
        'kategori_id' => 'required',
        'merk_id' => 'required'
        ]);
        $produk = produk::findOrFail($id);
        $produk->nama_produk = $request->nama_produk;
        $produk->harga = $request->harga;
        $produk->stock = $request->stock;
        $produk->kode_barang = $request->kode_barang;
        $produk->kategori_id = $request->kategori_id;
        $produk->merk_id = $request->merk_id;
        $produk->save();
        return redirect()->route('produks.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produk = produk::findOrFail($id);
        $produk->delete();
        return redirect()->route('produks.index');
    }
}
