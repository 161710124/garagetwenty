<?php

namespace App\Http\Controllers;

use App\checkout;
use App\User;
Use App\produk;
use Yajra\DataTables\Html\Builder;
use Yajra\Datatables\Datatables;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Builder $htmlBuilder)
    {
        // $cek = checkout::All();
        // return view('checkout.index',compact('cek'));
        if ($request->ajax()) {
        $checkout = checkout::with('User','produk');
        return Datatables::of($checkout)
        ->addColumn('action',function($checkout){
            return view('datatable._action',[
                'model' => $checkout,
                'form_url' => route('cek.destroy', $checkout->id),
                'edit_url'  => route('cek.edit', $checkout->id),
            ]);
        })->make(true);
        }
        $html = $htmlBuilder
        ->addColumn(['data' => 'nama', 'name'=>'nama', 'title'=>'nama'])
        ->addColumn(['data' => 'produk.nama_produk', 'name'=>'produk.nama_produk', 'title'=>'Produk'])
        ->addColumn(['data' => 'email', 'name'=>'email', 'title'=>'email'])
        ->addColumn(['data' => 'no_telp', 'name'=>'no_telp', 'title'=>'no telp'])
        ->addColumn(['data' => 'alamat', 'name'=>'alamat', 'title'=>'alamat'])
        ->addColumn(['data' => 'kota', 'name'=>'kota', 'title'=>'kota'])
        ->addColumn(['data' => 'provinsi', 'name'=>'provinsi', 'title'=>'provinsi'])
        ->addColumn(['data' => 'kodepos', 'name'=>'kodepos', 'title'=>'kodepos'])
        ->addColumn(['data' => 'catatan', 'name'=>'catatan', 'title'=>'catatan'])
        ->addColumn(['data' => 'action', 'name'=>'action', 'title'=>'Aksi', 'orderable'=>false, 'searchable'=>false]);
        return view('checkout.index')->with(compact('html'));
    }

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
     * @param  \App\checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function show(checkout $checkout)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function edit(checkout $checkout)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, checkout $checkout)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function destroy(checkout $checkout)
    {
        //
    }
}
