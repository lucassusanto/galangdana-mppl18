  @extends('app')
    @section('title')
        Admin
    @endsection
    @section('content')
    	<div class="container">
    	@if($users->count())
    		<div class="table-responsive" style="margin: 200px 0">
    		<div class="col-md-8 btn-group btn-group-sm" style="padding: 0; margin-bottom: 30px">
    			<a class="btn btn-primary disabled" role="button">User</a>
    			<a class="btn btn-primary" href="{{ url('/admin/campaign') }}" title="Campaign">Campaign</a>
    			<a class="btn btn-primary" href="{{ url('/admin/donasi') }}" title="Donasi">Donasi</a>
    		</div>
    		<div class="col-md-8" style="padding: 0; margin-bottom: 30px">
				{!! Form::open(['method'=>'GET','url'=>'cariuser','role'=>'search'])  !!}
				<div class="input-group">
				   	<input type="text" class="form-control" placeholder="Search Email" name="search">
				    <div class="input-group-btn">
				      	<button class="btn btn-default" type="submit">
				        	<i class="glyphicon glyphicon-search"></i>
				    	</button>
				    </div>
				</div>
				{!! Form::close() !!}
			</div>
			<table class="table table-bordered table-striped 
			              table-hover table-condensed tfix">
			<thead align="center">
			<tr><td><b>Email</b></td><td><b>Nama</b></td>
			    <td colspan="2"><b>Menu</b></td></tr>
			</thead>
		@foreach($users as $u)
			<tr>
				<td style="padding: 10px">{{ $u->email }}</td>
				<td style="padding: 10px">{{ $u->name }}</td>
				<td align="center" width="90px" style="padding: 10px">
					<a href="{{ url('/admin/'.$u->id.'/verifikasi')}}" class="btn btn-warning btn-sm" role="button"><i class="fa fa-pencil-square"></i> Lihat dan Verifikasi</a>
				</td>
			</tr>
		@endforeach
			</table>
			</div>
		@else
		<div class="alert alert-warning" style="margin: 200px 0 0 0">
 			<i class="fa fa-exclamation-triangle"></i> Data user tidak Ada
  		</div>
		<div style="margin-bottom: 200px">
		<a href="{{url('/admin')}}"><button class="btn btn-info">Kembali</button></a>
		</div>
    	@endif
    	{{$users->render()}}
    	</div>
    @endsection