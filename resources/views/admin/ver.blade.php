  @extends('app')
    @section('title')
        Admin
    @endsection
    @section('content')
    	<div class="container">
    		<div style="margin: 200px auto; width: 600px">
                <a href="{{url('/admin')}}"><button class="btn btn-info">Kembali</button></a>
                <div style="display: flex; margin: 10px auto" >
                    @if($users->foto_user != NULL)
                    <?php 
                        echo '<img src="data:image/jpeg;base64,'.base64_encode($users->foto_user).'"';
                        echo 'style="margin: 20px auto; height: 120px; width: auto" class="avatar" alt="avatar"/>';
                    ?>
                    @else
                    <img src="{{ asset('images/profile_default.jpg') }}" width="80px" height="120px" style="margin: 20px auto" class="avatar img-circle" alt="avatar"/>
                    @endif
                </div>
                <div style="display: flex; margin: 10px auto" >
                    <div style="flex: 1"><p style="font-size: 16px">ID</p></div>
                    <div style="width: 10px"><p style="font-size: 16px">:</p></div>
                    <div style="flex: 3"><p style="font-size: 16px">{{ $users->id }}</p></div>
                </div>
    			<div style="display: flex; margin: 10px auto" >
	    			<div style="flex: 1"><p style="font-size: 16px">Email</p></div>
                    <div style="width: 10px"><p style="font-size: 16px">:</p></div>
                    <div style="flex: 3"><p style="font-size: 16px">{{ $users->email }}</p></div>
	    		</div>
	    		<div style="display: flex; margin: 10px auto" >
	    			<div style="flex: 1"><p style="font-size: 16px">Nama</p></div>
                    <div style="width: 10px"><p style="font-size: 16px">:</p></div>
                    <div style="flex: 3"><p style="font-size: 16px">{{ $users->name }}</p></div>
	    		</div>
                <div style="display: flex; margin: 10px auto" >
                    <div style="flex: 1"><p style="font-size: 16px">Tanggal Lahir</p></div>
                    <div style="width: 10px"><p style="font-size: 16px">:</p></div>
                    <div style="flex: 3"><p style="font-size: 16px">{{ $users->tanggal_lahir }}</p></div>
                </div>
                <div style="display: flex; margin: 10px auto" >
                    <div style="flex: 1"><p style="font-size: 16px">Alamat</p></div>
                    <div style="width: 10px"><p style="font-size: 16px">:</p></div>
                    <div style="flex: 3"><p style="font-size: 16px">{{ $users->alamat }}</p></div>
                </div>
                <div style="display: flex; margin: 10px auto" >
                    <div style="flex: 1"><p style="font-size: 16px">Tipe User</p></div>
                    <div style="width: 10px"><p style="font-size: 16px">:</p></div>
                    <div style="flex: 3">
                        <p style="font-size: 16px">
                            @if($users->tipe_user == 0)
                            Tidak terverifikasi
                            @elseif($users->tipe_user == 1)
                            Terverifikasi
                            @elseif($users->tipe_user == 2)
                            Admin
                            @endif
                        </p>
                    </div>
                </div>
                <div style="display: flex; margin: 10px auto" >
                    <div style="flex: 1"><p style="font-size: 16px">KTP</p></div>
                    <div style="width: 10px"><p style="font-size: 16px">:</p></div>
                    <div style="flex: 3">
                    <?php 
                        if($users->ktp != NULL){
                            echo '<img src="data:image/jpeg;base64,'.base64_encode($users->ktp).'"';
                            echo 'style="margin: 20px auto; height: 180px; width: auto" class="avatar" alt="avatar"/>';
                        }
                        else{
                            echo '<div style="flex: 3"><p style="font-size: 16px">Tidak ada</p></div>';
                        }
                    ?>
                    </div>
                </div>
                <div style="display: flex; margin: 10px auto" >
                    <div style="flex: 1"><p style="font-size: 16px">Foto verifikasi</p></div>
                    <div style="width: 10px"><p style="font-size: 16px">:</p></div>
                    <div style="flex: 3">
                    <?php 
                        if($users->foto_verifikasi != NULL){
                            echo '<img src="data:image/jpeg;base64,'.base64_encode($users->foto_verifikasi).'"';
                            echo 'style="margin: 20px auto; height: 180px; width: auto" class="avatar" alt="avatar"/>';
                        }
                        else{
                            echo '<div style="flex: 3"><p style="font-size: 16px">Tidak ada</p></div>';
                        }
                    ?>
                    </div>
                </div>
                <div style="display: flex; margin: 10px auto" >
                    <div style="flex: 1"><p style="font-size: 16px">Nomor telfon</p></div>
                    <div style="width: 10px"><p style="font-size: 16px">:</p></div>
                    <div style="flex: 3"><p style="font-size: 16px">{{ $users->nomor_hp }}</p></div>
                </div>
                <div style="display: flex; margin: 10px auto" >
                    <div style="flex: 1"><p style="font-size: 16px">Register pada</p></div>
                    <div style="width: 10px"><p style="font-size: 16px">:</p></div>
                    <div style="flex: 3"><p style="font-size: 16px">{{ $users->created_at }}</p></div>
                </div>
                <form action="{{url('/admin/'.$users->id.'/verifikasi')}}" method="post" style="display: flex; margin: 50px auto">
                    {{ csrf_field() }}
                    <div style="flex: 1; margin: 10px">
                        <button name="subval" type="submit" class="btn btn-success" style="width: 100%" value=2>Admin</button>
                    </div>
                    <div style="flex: 1; margin: 10px">
                        <button name="subval" type="submit" class="btn btn-warning" style="width: 100%" value=1>Verifikasi</button>
                    </div>
                    <div style="flex: 1; margin: 10px">
                        <button name="subval" type="submit" class="btn btn-danger" style="width: 100%" value=0>Hapus tipe User</button>
                    </div>
                </form>
    		</div>
    	</div>
    @endsection