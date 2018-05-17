@extends('app')
@section('title')
    TCare! Peduli Sesama
@endsection
@section('content')
<div class="container" style="margin-top: 100px ;margin-bottom: 200px">
	<h1>
		@if(Auth::user()['id']==substr(Request::path(),5,1))
				Campaign Saya
		@else
				Campaign {{$u->name}}
		@endif
	</h1><hr>
    <div class="row">
    	<!-- left column -->
        @include('include.edit')
        <div class="col-md-9 personal-info">
			<div class="panel panel-default">
				<div class="panel-body">
					<h4><i class=""></i>Daftar Campaign Saya</h4><hr>
		@if($users->count())
						<div class="flex-row row">
						<?php $no =1 ?>
		@foreach($users as $k)
		<div class="col-xs-6 col-sm-4 col-lg-3">
			<div class="thumbnail">
				<!--<img src="http://placehold.it/350x180">-->
				<?php
					$content = $k->foto_kegiatan;
                    echo '<img src="data:image/jpeg;base64,'.base64_encode($content).'"';
                    echo 'style="width: 100%; height: 130px"/>';
				?>
				<div class="caption">
					<?php
						$date_expire = $k->deadline;
						$date = new DateTime($date_expire);
						$now = new DateTime();
						$final_date = $date->diff($now)->format("%d Hari lagi");
					?>
					<h3>{{ $k->nama_kegiatan }} <br><small class="text-info">{{ $final_date }}</small></h3>
					<p class="flex-text text-muted">{{ $k->deskripsi }}</p>
					<p><a class="btn btn-primary" href="{{ url('/donasi/'.$k->id.'/detail') }}">Detail</a></p>
				</div>
			</div>
		</div>
		@endforeach
	</div>
			@else
			<div class="alert alert-warning">
		 				<i class="fa fa-exclamation-triangle"></i> Anda Belum Melakukan Campaign
		  			</div>
					@endif

				</div>
				{{ $users->render() }}
			</div>
		</div>
	</div>
</div>
@endsection
