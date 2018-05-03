<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
	protected $primaryKey = 'id';
    public function user(){
    	return $this->belongsTo('App\user', 'id_user', 'id');
    }
    public function kegiatan(){
    	return $this->belongsTo('App\kegiatan', 'id_kegiatan', 'id');
    }
}
