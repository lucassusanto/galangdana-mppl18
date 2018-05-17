<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\kegiatan;
use App\transaksi;

class AdminController extends Controller
{
 	public function index(){
 		if(Auth::user()->tipe_user == 2){
 			$users = User::paginate(25);
 			return view('admin.index', compact('users'));
 		}
 		else
 			return redirect('/');
 	}

 	public function indexCampaign(){
 		$kegiatan = kegiatan::paginate(25);
 		return view('admin.campaign', compact('kegiatan'));
 	}

 	public function indexDonasi(){
 		$donasi = transaksi::where('status_transaksis',0)->paginate(25);
 		return view('admin.donasi', compact('donasi'));
 	}

 	public function show(user $u){
 		if(Auth::user()->tipe_user == 2){
 			return view('admin.ver', ['users' => $u]);
 		}
 		else
 			return redirect('/');
 	}

 	public function showCampaign(kegiatan $u){
 		return view('admin.campaignVer', ['kegiatan' => $u]);
 	}

 	public function showDonasi(transaksi $u){
 		return view('admin.donasiVer', ['donasi' => $u]);
 	}

 	public function search(Request $r){
 		$cari = $r->search;
        $users = User::where('email','LIKE','%'.$cari.'%')->paginate(25);
        return view('admin.index',compact('users'));
    }

    public function searchCampaign(Request $r){
    	$cari = $r->search;
    	$kegiatan = kegiatan::where('nama_kegiatan', 'LIKE', '%'.$cari.'%')->paginate(25);
    	return view('admin.campaign', compact('kegiatan'));
    }

    public function verifikasi(Request $r, user $u){
    	$u->tipe_user = $r->subval;
    	$u->save();
    	return redirect('/admin/'.$u->id.'/verifikasi');
    }

    public function verifikasiCampaign(Request $r, kegiatan $u){
    	if($r->subval == 0){
    		$u->delete();
    		$kegiatan = kegiatan::paginate(25);
 			return view('admin.campaign', compact('kegiatan'));
    	}
    	else{
    		$u->status_kegiatans = $r->subval;
    		$u->save();
    		return redirect('/admin/campaign/'.$u->id.'/verifikasi');
    	}
    }

    public function verifikasiDonasi(Request $r, transaksi $u){
    	$kegiatan = kegiatan::find($u->kegiatan->id);
    	$kegiatan->uang_terkumpul += $u->jumlah_donasi;
    	$kegiatan->save();

    	$u->status_transaksis = 1;
    	$u->save();

    	return redirect('/donasi/'.$u->kegiatan->id.'/detail');
    }
}