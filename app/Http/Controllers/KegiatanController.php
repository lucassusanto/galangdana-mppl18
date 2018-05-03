<?php

namespace App\Http\Controllers;

use App\kegiatan;
use App\User;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
    {
        $kegiatan = kegiatan::where('status_kegiatans', 1)->orderBy('id','desc')->paginate(8);
        return view('donasi.index', compact('kegiatan'));
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
    public function store(Request $request, User $u)
    {
        $file = $request->file('foto_kegiatan');
        $request->foto_kegiatan = $file->openFile()->fread($file->getsize());
        $kegiatan = new kegiatan;
        $kegiatan->id_user = $u->id;
        $kegiatan->nama_kegiatan = $request->nama_kegiatan;
        $kegiatan->deadline = $request->deadline;
        $kegiatan->uang_terkumpul = 0;
        $kegiatan->uang_target = $request->uang_target;
        $kegiatan->deskripsi = $request->deskripsi;
        $kegiatan->foto_kegiatan = $request->foto_kegiatan;
        $kegiatan->status_kegiatans = 0;

        $kegiatan->save();

        return redirect('/donasi/'.$kegiatan->id.'/detail');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function show(kegiatan $u)
    {

        $kegiatan=$u;
        return  view('donasi.jumlah',compact('kegiatan'));
        
    }


    public function show2(kegiatan $u)
    {

        $kegiatan=$u;
        return  view('donasi.bayardonasi',compact('kegiatan'));
        
    }

    public function verifikasicair(kegiatan $u){
        $kegiatan = $u;
        return view('donasi.verifikasicair', compact('kegiatan'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function edit(kegiatan $u)
    {
     
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, kegiatan $u)
    {
        $file = $request->file('foto_kegiatan');
        $request->foto_kegiatan = $file->openFile()->fread($file->getSize());
        $kegiatan = kegiatan::find($u->id);
        $kegiatan->nama_kegiatan = $request->nama_kegiatan;
        $kegiatan->deadline = $request->deadline;
        $kegiatan->uang_target = $request->uang_target;
        $kegiatan->deskripsi = $request->deskripsi;
        $kegiatan->foto_kegiatan = $request->foto_kegiatan;

        $kegiatan->save();

        return redirect("/donasi/$u->id/detail");
    }

    public function updateForm(kegiatan $u){
        $kegiatan = $u;
        return view('update_galang', compact('kegiatan'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function destroy(kegiatan $u)
    {
        $users = $u->User->id;
        $u->delete();
        return redirect('/user/'.$users.'/campaign');
    }
}
