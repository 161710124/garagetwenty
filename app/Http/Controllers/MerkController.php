<?php

namespace App\Http\Controllers;

use App\merk;
use Yajra\DataTables\Html\Builder;
use Yajra\Datatables\Datatables;
use Illuminate\Http\Request;

class MerkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Builder $htmlBuilder)
    {
        // $merk = merk::all();
        // return view('merk.index',compact('merk'));
         if ($request->ajax()) {
        $merk = merk::all();
        return Datatables::of($merk)
        ->addColumn('action',function($merk){
            return view('datatable._action',[
                'model' => $merk,
                'form_url' => route('merks.destroy', $merk->id),
                'edit_url'  => route('merks.edit', $merk->id),
            ]);
        })->make(true);
        }
        $html = $htmlBuilder
        ->addColumn(['data' => 'nama_merk', 'name'=>'nama_merk', 'title'=>'Nama'])
        ->addColumn(['data' => 'action', 'name'=>'action', 'title'=>'Aksi', 'orderable'=>false, 'searchable'=>false]);
        return view('merk.index')->with(compact('html'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('merk.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
        'nama_merk' => 'required'
        ]);
        $merk = merk::create($request->all());
        return redirect()->route('merks.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\merk  $merk
     * @return \Illuminate\Http\Response
     */
    public function show(merk $merk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\merk  $merk
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $merk = merk::findOrFail($id);
        return view('merk.edit',compact('merk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\merk  $merk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'nama_merk' => 'required'
        ]);
        
        $merk = merk::findOrFail($id);
        $merk->nama_merk = $request->nama_merk;
        $merk->save();
        return redirect()->route('merks.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\merk  $merk
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $merk = merk::findOrFail($id);
        $merk->delete();
        return redirect()->route('merks.index');
    }
}
