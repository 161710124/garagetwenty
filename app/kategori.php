<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    protected $table = 'kategoris';
    protected $fillable =array('nama_kategori','slug');

    public function produk(){
    	return $this->hasmany('App\produk','kategori_id');
	}

	public function getRouteKeyName()
	{
		return 'slug';
	}
}

