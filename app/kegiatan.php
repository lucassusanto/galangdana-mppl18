<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kegiatan extends Model
{
	protected $primaryKey = 'id';
	public function user(){
		return $this->belongsTo('App\User', 'id_user', 'id');
	}
    public function transaksi(){
    	return $this->hasMany('App\transaksi', 'id_kegiatan');
    }

    protected $fillable = [
        'nama_kegiatan', 'deadline', 'uang_target','deskripsi','foto_kegiatan',
    ];
}
