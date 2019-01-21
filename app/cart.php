<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    protected $table = 'carts';
    protected $fillable = array('user_id','produk_id','total_harga','jumlah');

    public function user(){
    	return $this->belongsTo('App\User','user_id');
	}

    public function produk(){
    	return $this->belongsTo('App\produk','produk_id');
	}

	public function checkout(){
    	return $this->hasmany('App\checkout','cart_id');
	}
}
