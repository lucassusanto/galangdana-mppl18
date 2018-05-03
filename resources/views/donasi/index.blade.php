@extends('app')
@section('title')
	Donasi
@endsection
@section('content')
<div style="margin: 150px 0 0 0">
	<div class="row">
		<div class="col-lg-12">
				<h1 class="page-header text-center">Donasikan hartamu!
        <br><small class="text-info">Galang dana ini telah terverifikasi oleh admin</small>
      </h1>
		</div>
	</div>
	<!-- /.row -->
</div>
<br>
<div class="container" style="margin-bottom: 100px">
	<div class="flex-row row">
		@foreach($kegiatan as $k)
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
					<p><a class="btn btn-primary" href="{{ url('/donasi/'.$k->id.'/detail') }}">Donasi</a></p>
				</div>
				<!-- /.caption -->
			</div>
			<!-- /.thumbnail -->
		</div>
		@endforeach
	</div>
	<!-- /.flex-row  -->
	{{ $kegiatan->render() }}
</div>
<!-- /.container  -->
@endsection