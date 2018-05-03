<?php

namespace App\Http\Controllers;

use App\transaksi;
use Illuminate\Http\Request;
use App\kegiatan;
use Illuminate\Support\Facades\Auth;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, kegiatan $u)
    {
        $transaksi = new transaksi;
        if(Auth::user() == NULL){
            $transaksi->id_user = NULL;
        }
        else{
            $transaksi->id_user = Auth::user()->id;
        }
        $file = $request->file('bukti_trf');
        $request->bukti_trf = $file->openFile()->fread($file->getSize());
        $transaksi->id_kegiatan = $u->id;
        $transaksi->jumlah_donasi = $request->jumlah_donasi;
        $transaksi->bukti_trf = $request->bukti_trf;
        $transaksi->save();

        return redirect('/donasi/'.$transaksi->id_kegiatan.'/detail');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function show(transaksi $transaksi)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function edit(transaksi $transaksi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, transaksi $transaksi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function destroy(transaksi $u)
    {
        $user = $u->user->id;
        $u->delete();
        return redirect('/user/'.$user.'/transaksi');
    }
}
