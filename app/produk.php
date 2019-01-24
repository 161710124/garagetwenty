<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    protected $table = 'produks';
    protected $fillable =array('nama_produk','harga','stock','slug','kode_barang','deskripsi','kategori_id',
    	'merk_id');

    public function fotoproduk(){
    	return $this->hasmany('App\foto_produk','produk_id');
	}
	public function cart(){
    	return $this->hasmany('App\cart','produk_id');
	}

    public function kategori(){
    	return $this->belongsTo('App\kategori','kategori_id');
	}
	public function merk(){
    	return $this->belongsTo('App\merk','merk_id');
	}
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
