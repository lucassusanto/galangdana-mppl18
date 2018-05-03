<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\transaksi;
use App\kegiatan;
use App\campaign;
class UserController extends Controller
{
    public function edit(user $u){
    	$users = User::findOrFail($u);
    	return view('user', compact('users'));
    }

	public function update(Request $request, user $u){
		$users = User::findOrFail($u)->first();
		$users->update($request->all());
		return redirect("/user/$users->id/profil");
	}

	public function imageUpload(Request $request, user $u){
		$file = $request->file('image');
		$contents = $file->openFile()->fread($file->getSize());
		$user = User::find($u)->first();
	    $user->foto_user = $contents;
	    $user->save();
	    return redirect("/user/$user->id/profil");
	}

	public function transaksi(user $u){
		$users = $u->transaksi()->paginate(25);	
		echo "masuk";
		return view('donasisaya', compact('users'));
	}

	public function verifikasi(Request $request, user $u){
		$file = $request->file('ktp');
		$ktp = $file->openFile()->fread($file->getSize());
		$file = $request->file('foto_diri');
		$foto_diri = $file->openFile()->fread($file->getSize());

		$u->ktp = $ktp;
		$u->foto_verifikasi = $foto_diri;
		$u->nomor_hp = $request->nomor_hp;
		$u->save();
	}

	public function campaign (user $u){
		$users = $u->kegiatan()->paginate(2);
        return view('campaign', compact('users'));
	}
}

