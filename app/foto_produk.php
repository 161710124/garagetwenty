<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class foto_produk extends Model
{
    protected $table = 'foto_produks';
    protected $fillable = array('produk_id','foto');

    public function produk(){
    	return $this->belongsTo('App\produk','produk_id');
	}
}
