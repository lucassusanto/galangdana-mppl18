@extends('app')
@section('title')
    GalangDana! Peduli Sesama
@endsection
@section('content')
<div class="container" style="margin-top: 100px ;margin-bottom: 200px">
	<h1>
		@if(Auth::user()['id']==substr(Request::path(),5,1))
				Histori Donasi Saya
		@else
				Histori Donasi {{$u->name}}
		@endif
	</h1><hr>
    <div class="row">
    	<!-- left column -->
        @include('include.edit')
        <div class="col-md-9 personal-info">
			<div class="panel panel-default">
				<div class="panel-body">
					<h4><i class=""></i>
							Histori Donasi
					</h4><hr>
					@if($users->count())
					<div class="table-responsive">
						<table class="table table-bordered table-striped table-hover table-condensed tfix">
							<thead align="center">
								<tr>
									<td><b>No</b></td>
									<td><b>Kegiatan Penggalangan</b>
									</td><td><b>Nominal Donasi</b></td>
		    						<td><b>Tanggal Penggalangan</b></td>
		    						<td><b>Status/Aksi</b></td>
		    					</tr>
							</thead>
							<?php $no = 1 ?>
							@if($users->count())
							@foreach($users as $m)
							<tr align="center">
								<td>{{ $no++ }}</td>
								<td>{{ $m->kegiatan->nama_kegiatan }}</td>
								<td>Rp. {{ $m->jumlah_donasi }}</td>
								<td>{{ $m->created_at }}</td>
								@if($m->status_transaksis == 0)
								<td align="center" width="90px" style="padding: 10px">
									<a href="{{ url('/transaksi/'.$m->id.'/delete') }}" class="btn btn-danger btn-sm" role="button"><i class="fa fa-pencil-square"></i>Hapus</a>
								</td>
								@elseif($m->status_transaksis == 1)
								<td align="center" width="90px" style="padding: 10px">
									<div class="btn btn-success btn-sm" role="button"><i class="fa fa-check"></i>Terverifikasi</div>
								</td>
								@endif
							</tr>
							@endforeach
						</table>
						{{ $users->render() }}
						@endif
					</div>
					@else
		 			<div class="alert alert-warning">
		 				<i class="fa fa-exclamation-triangle"></i> Anda Belum Melakukan Penggalangan Dana
		  			</div>
					@endif
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
