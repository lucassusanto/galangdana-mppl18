<div class="col-md-3">
    <div class="text-center">
        @if(Auth::user()['foto_user'] == NULL)
        <img src="{{ asset('images/profile_default.jpg') }}" width="80px" height="120px" style="margin: 20px auto" class="avatar img-circle" alt="avatar"/>
        @else
        <?php 
            $content = Auth::user()['foto_user'];
            echo '<img src="data:image/jpeg;base64,'.base64_encode($content).'"';
            echo 'width="320px" height="480px" style="margin: 20px auto" class="avatar img-circle" alt="avatar"/>';
        ?>
        @endif
        <form action="{{url('/user/'.Auth::user()->id.'/image')}}" enctype="multipart/form-data" method="POST">
        
            {{ csrf_field() }}
            <div class="row">
                <div class="col-md-12">
                    <input type="file" name="image" required autofocus />
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-success" style="width: 100%">Upload</button>
                </div>
            </div>
        </form>
    </div>  
    <div class="col-md-12" style="margin-top: 15px">
        <a href="{{ url('/user/'.Auth::user()->id.'/profil') }}"><button type="button" class="btn btn-primary" style="width: 100%">Edit Profile</button></a>
    </div>
     <div class="col-md-12">
        <a href="{{ url('/user/'.Auth::user()->id.'/campaign') }}"><button type="button" class="btn btn-primary" style="width: 100%">Campaign Saya</button></a>
    </div>
     <div class="col-md-12">
        <a href="{{url ('/user/'.Auth::user()->id.'/transaksi') }}"><button type="button" class="btn btn-primary" style="width: 100%">Donasi Saya</button></a>
    </div>
     <div class="col-md-12">
        <a href="{{ url('/user/'.Auth::user()->id.'/verifikasi') }}"><button type="button" class="btn btn-primary" style="width: 100%">Verifikasi Akun</button></a>
    </div>
</div>