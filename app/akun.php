<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class akun extends Model
{
    public function transaksi(){
    	return $this->hasMany('App\transaksi', 'id_user');
    }
}
