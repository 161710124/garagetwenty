<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class merk extends Model
{
    protected $table = 'merks';
    protected $fillable =array('nama_merk');

    public function produk(){
    	return $this->hasmany('App\produk','merk_id');
}
}
