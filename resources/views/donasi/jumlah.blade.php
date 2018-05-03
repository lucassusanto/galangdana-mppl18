@extends('app')
@section('title')
    Donasi Saya
@endsection
@section('content')

<div class="container" style="text-align: center; margin-top: 120px ;margin-bottom: 200px; text-decoration-color: currentColor;">
    <h2 style="color: blue"> {{ $kegiatan->nama_kegiatan }} </h2>
  	<hr>
	<div class="row">
      
      <div class="col-md-3">
        <div class="text-center" style="text-align: left">
		<h1>Rp. {{ $kegiatan->uang_terkumpul }}</h1>
 		<p>Terkumpul Dari Target Rp. {{ $kegiatan->uang_target }}</p>
        <span class="icon-schedule"></span> 
        <?php
$date_expire = $kegiatan->deadline;    
$date = new DateTime($date_expire);
$now = new DateTime();

echo $date->diff($now)->format("%d Hari Lagi");
 ?>
 
		         
        </div>
        @if($kegiatan->status_kegiatans == 1)
          <a href="{{ url('/donasi/'.$kegiatan->id.'/transaksi') }}"><button type="button" class="btn btn-primary btn-lg gradient" style="margin-top: 20px">Donasi Sekarang</button></a>
          <a href="{{ url('/donasi') }}"><button type="button" class="btn btn-primary btn-lg gradient" style="margin-top: 20px">Donasi Di Tempat Lain</button></a>
          @if(Auth::check() && Auth::user()->id == $kegiatan->id_user)
            <a href="{{ url('/donasi/'.$kegiatan->id.'/cair') }}"><button type="button" class="btn btn-success btn-lg gradient" style="margin-top: 20px">Cairkan Donasi</button></a>
          @endif
        @else
          @if(Auth::check() && Auth::user()->id == $kegiatan->id_user)
          <a href="{{ url('/campaign/'.$kegiatan->id.'/updateForm') }}"><button type="button btn-warning" class="btn btn-primary btn-lg gradient" style="margin-top: 20px">Update</button></a>
          <a href="{{ url('/donasi/'.$kegiatan->id.'/delete') }}"><button type="button" class="btn btn-primary btn-lg gradient btn-danger" style="margin-top: 20px">Delete</button></a>
          @endif
        @endif
        </div>
      
      <!-- edit form column -->
      <div class="col-md-9 personal-info">
       	<?php 
 $content = $kegiatan->foto_kegiatan;
    echo '<img src="data:image/jpeg;base64,'.base64_encode($content).'"';
    echo 'style="width: 700px;height: 300px ; margin-left: 80px" alt="avatar"/>';
?>
<h3 style="text-align: left ; margin-left: 80px ;margin-bottom:100px;" >Deskripsi : {{ $kegiatan->deskripsi }}</h3>
</div>





</div>


@endsection