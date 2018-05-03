<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','tanggal_lahir','alamat','foto_user','tipe_user','ktp','foto_verifikasi','nomor_hp',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token'
    ];

    protected $primaryKey = 'id';

    public function kegiatan(){
        return $this->hasMany('App\kegiatan', 'id_user');
    }

    public function transaksi(){
        return $this->hasMany('App\transaksi', 'id_user');
    }
}
