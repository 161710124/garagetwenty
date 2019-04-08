<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class checkout extends Model
{
    protected $table = 'checkouts';
    protected $fillable = array('user_id','produk_id','nama','email','no_telp','alamat','kota','provinsi','kodepos','catatan');

    public function user(){
    	return $this->belongsTo('App\User','user_id');
	}

	public function produk(){
    	return $this->belongsTo('App\produk','produk_id');
	}
}
