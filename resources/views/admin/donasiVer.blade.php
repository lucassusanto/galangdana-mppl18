  @extends('app')
    @section('title')
        Admin
    @endsection
    @section('content')
    	<div class="container">
    		<div style="margin: 200px auto; width: 600px">
                <a href="{{url('/admin/donasi')}}"><button class="btn btn-info">Kembali</button></a>
                <div style="display: flex; margin: 10px auto" >
                    @if($donasi->bukti_trf != NULL)
                    <?php 
                        echo '<img src="data:image/jpeg;base64,'.base64_encode($donasi->bukti_trf).'"';
                        echo 'style="margin: 20px auto; height: 120px; width: auto" class="avatar" alt="avatar"/>';
                    ?>
                    @else
                    <img src="{{ asset('images/profile_default.jpg') }}" width="80px" height="120px" style="margin: 20px auto" class="avatar img-circle" alt="avatar"/>
                    @endif
                </div>
                <div style="display: flex; margin: 10px auto" >
                    <div style="flex: 1"><p style="font-size: 16px">ID User</p></div>
                    <div style="width: 10px"><p style="font-size: 16px">:</p></div>
                    <div style="flex: 3"><p style="font-size: 16px">{{ $donasi->user->id }}</p></div>
                </div>
    			<div style="display: flex; margin: 10px auto" >
	    			<div style="flex: 1"><p style="font-size: 16px">Email</p></div>
                    <div style="width: 10px"><p style="font-size: 16px">:</p></div>
                    <div style="flex: 3"><p style="font-size: 16px">{{ $donasi->user->email }}</p></div>
	    		</div>
                <div style="display: flex; margin: 10px auto" >
                    <div style="flex: 1"><p style="font-size: 16px">ID Kegiatan</p></div>
                    <div style="width: 10px"><p style="font-size: 16px">:</p></div>
                    <div style="flex: 3"><p style="font-size: 16px">{{ $donasi->kegiatan->id }}</p></div>
                </div>
	    		<div style="display: flex; margin: 10px auto" >
	    			<div style="flex: 1"><p style="font-size: 16px">Nama Kegiatan</p></div>
                    <div style="width: 10px"><p style="font-size: 16px">:</p></div>
                    <div style="flex: 3"><p style="font-size: 16px">{{ $donasi->kegiatan->nama_kegiatan }}</p></div>
	    		</div>
                <div style="display: flex; margin: 10px auto" >
                    <div style="flex: 1"><p style="font-size: 16px">ID Transfer</p></div>
                    <div style="width: 10px"><p style="font-size: 16px">:</p></div>
                    <div style="flex: 3"><p style="font-size: 16px">{{ $donasi->id }}</p></div>
                </div>
                <div style="display: flex; margin: 10px auto" >
                    <div style="flex: 1"><p style="font-size: 16px">Jumlah</p></div>
                    <div style="width: 10px"><p style="font-size: 16px">:</p></div>
                    <div style="flex: 3"><p style="font-size: 16px">{{ $donasi->jumlah_donasi }}</p></div>
                </div>
                <div style="display: flex; margin: 10px auto" >
                    <div style="flex: 1"><p style="font-size: 16px">Waktu</p></div>
                    <div style="width: 10px"><p style="font-size: 16px">:</p></div>
                    <div style="flex: 3"><p style="font-size: 16px">{{ $donasi->created_at }}</p></div>
                </div>
                <div style="display: flex; margin: 10px auto" >
                    <div style="flex: 1"><p style="font-size: 16px">Status Kegiatan</p></div>
                    <div style="width: 10px"><p style="font-size: 16px">:</p></div>
                    <div style="flex: 3">
                        <p style="font-size: 16px">
                            @if($donasi->status_donasis == 0)
                            Tidak terverifikasi
                            @elseif($donasi->status_donasis == 1)
                            Terverifikasi
                            @endif
                        </p>
                    </div>
                </div>
                
                <form action="{{url('/admin/donasi/'.$donasi->id.'/verifikasi')}}" method="post" style="display: flex; margin: 50px auto">
                    {{ csrf_field() }}
                    <div style="flex: 1; margin: 10px">
                        <button name="subval" type="submit" class="btn btn-success" style="width: 100%" value=1>Verifikasi</button>
                    </div>
                </form>
    		</div>
    	</div>
    @endsection