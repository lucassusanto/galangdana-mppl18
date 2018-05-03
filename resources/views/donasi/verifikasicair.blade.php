@extends('app')
@section('title')
	Cair donasi verifikasi
@endsection
@section('content')
<div style="margin: 200px 0">
	<h3 style="text-align: center; margin: 10px auto;">Uang donasi akan dikirimkan ke alamat rumah anda, cek apakah alamat anda benar!</h3>
	<div class="alert alert-success">
		<h4 style="text-align: center; margin: 30px auto;">{{Auth::user()->alamat}}</h4>
	</div>
	<div style="text-align: center; margin: 50px auto 0 auto">
		<a href="{{ url('/donasi/'.$kegiatan->id.'/delete') }}"><button class="btn btn-lg btn-success">Cairkan</button></a>
		<a href="{{ url('/donasi/'.$kegiatan->id.'/detail') }}"><button class="btn btn-lg btn-danger">Batal</button></a>
	</div>
</div>
@endsection