  @extends('app')
    @section('title')
        Admin
    @endsection
    @section('content')
    	<div class="container">
    		<div style="margin: 200px auto; width: 600px">
                <a href="{{url('/admin/campaign')}}"><button class="btn btn-info">Kembali</button></a>
                <div style="display: flex; margin: 10px auto" >
                    @if($kegiatan->foto_kegiatan != NULL)
                    <?php 
                        echo '<img src="data:image/jpeg;base64,'.base64_encode($kegiatan->foto_kegiatan).'"';
                        echo 'style="margin: 20px auto; height: 120px; width: auto" class="avatar" alt="avatar"/>';
                    ?>
                    @else
                    <img src="{{ asset('images/profile_default.jpg') }}" width="80px" height="120px" style="margin: 20px auto" class="avatar img-circle" alt="avatar"/>
                    @endif
                </div>
                <div style="display: flex; margin: 10px auto" >
                    <div style="flex: 1"><p style="font-size: 16px">ID User</p></div>
                    <div style="width: 10px"><p style="font-size: 16px">:</p></div>
                    <div style="flex: 3"><p style="font-size: 16px">{{ $kegiatan->id_user }}</p></div>
                </div>
    			<div style="display: flex; margin: 10px auto" >
	    			<div style="flex: 1"><p style="font-size: 16px">Email</p></div>
                    <div style="width: 10px"><p style="font-size: 16px">:</p></div>
                    <div style="flex: 3"><p style="font-size: 16px">{{ $kegiatan->user->email }}</p></div>
	    		</div>
                <div style="display: flex; margin: 10px auto" >
                    <div style="flex: 1"><p style="font-size: 16px">ID Kegiatan</p></div>
                    <div style="width: 10px"><p style="font-size: 16px">:</p></div>
                    <div style="flex: 3"><p style="font-size: 16px">{{ $kegiatan->id }}</p></div>
                </div>
	    		<div style="display: flex; margin: 10px auto" >
	    			<div style="flex: 1"><p style="font-size: 16px">Nama</p></div>
                    <div style="width: 10px"><p style="font-size: 16px">:</p></div>
                    <div style="flex: 3"><p style="font-size: 16px">{{ $kegiatan->nama_kegiatan }}</p></div>
	    		</div>
                <div style="display: flex; margin: 10px auto" >
                    <div style="flex: 1"><p style="font-size: 16px">Deadline</p></div>
                    <div style="width: 10px"><p style="font-size: 16px">:</p></div>
                    <div style="flex: 3"><p style="font-size: 16px">{{ $kegiatan->deadline }}</p></div>
                </div>
                <div style="display: flex; margin: 10px auto" >
                    <div style="flex: 1"><p style="font-size: 16px">Target Uang</p></div>
                    <div style="width: 10px"><p style="font-size: 16px">:</p></div>
                    <div style="flex: 3"><p style="font-size: 16px">{{ $kegiatan->uang_target }}</p></div>
                </div>
                <div style="display: flex; margin: 10px auto" >
                    <div style="flex: 1"><p style="font-size: 16px">Deskripsi</p></div>
                    <div style="width: 10px"><p style="font-size: 16px">:</p></div>
                    <div style="flex: 3"><p style="font-size: 16px">{{ $kegiatan->deskripsi }}</p></div>
                </div>
                <div style="display: flex; margin: 10px auto" >
                    <div style="flex: 1"><p style="font-size: 16px">Status Kegiatan</p></div>
                    <div style="width: 10px"><p style="font-size: 16px">:</p></div>
                    <div style="flex: 3">
                        <p style="font-size: 16px">
                            @if($kegiatan->status_kegiatans == 0)
                            Tidak terverifikasi
                            @elseif($kegiatan->status_kegiatans == 1)
                            Terverifikasi
                            @else
                            {{ $kegiatan->status_kegiatans }}
                            @endif
                        </p>
                    </div>
                </div>
                <div style="display: flex; margin: 10px auto" >
                    <div style="flex: 1"><p style="font-size: 16px">Register pada</p></div>
                    <div style="width: 10px"><p style="font-size: 16px">:</p></div>
                    <div style="flex: 3"><p style="font-size: 16px">{{ $kegiatan->created_at }}</p></div>
                </div>
                <form action="{{url('/admin/campaign/'.$kegiatan->id.'/verifikasi')}}" method="post" style="display: flex; margin: 50px auto">
                    {{ csrf_field() }}
                    <div style="flex: 1; margin: 10px">
                        <button name="subval" type="submit" class="btn btn-success" style="width: 100%" value=1>Verifikasi</button>
                    </div>
                    <div style="flex: 1; margin: 10px">
                        <button name="subval" type="submit" class="btn btn-danger" style="width: 100%" value=0>Delete</button>
                    </div>
                </form>
    		</div>
    	</div>
    @endsection