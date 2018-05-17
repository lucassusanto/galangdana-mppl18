@extends('app')
@section('title')
    GalangDana! Peduli Sesama
@endsection

@section('content')

<div class="container" style="margin-top: 100px ;margin-bottom: 200px">
    <h1>Edit Profile</h1>
    <hr>
    <div class="row">
    <!-- left column -->

        @include('include.edit', ['passedUserId' => substr(Request::path(),5,1)])

        @if(Auth::user()['id']==substr(Request::path(),5,1))
        <div class="col-md-9 personal-info">
            <h3>Info Profile</h3>
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/user/'.Auth::user()->id.'/update') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nama Orang Baik</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ Auth::user()->name }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail </label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ Auth::user()->email }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                         <div class="form-group{{ $errors->has('tanggal_lahir') ? ' has-error' : '' }}">
                            <label for="tanggal_lahir" class="col-md-4 control-label">Tanggal Lahir</label>

                            <div class="col-md-6">
                                <input id="tanggal_lahir" type="date" class="form-control" name="tanggal_lahir" value="{{ Auth::user()->tanggal_lahir }}" required autofocus>

                                @if ($errors->has('tanggal_lahir'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tanggal_lahir') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                         <div class="form-group{{ $errors->has('alamat') ? ' has-error' : '' }}">
                            <label for="alamat" class="col-md-4 control-label">Alamat</label>

                            <div class="col-md-6">
                                <input id="alamat" type="text" class="form-control" name="alamat" value="{{ Auth::user()->alamat }}" required autofocus>

                                @if ($errors->has('alamat'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('alamat') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>   
                        <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type="submit" class="btn btn-primary" value="Save Changes">
              <span></span>
              <input type="reset" class="btn btn-default" value="Cancel">
            </div>
          </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @else
            @foreach($users as $user)
                <h3>Info Profile</h3>
                <br><br>
                <div class="row">
                    <p style="padding-left: 500px;">Nama orang baik : <strong>{{$user->name}}</strong></p>
                    <p style="padding-left: 500px;">Email : <strong>{{$user->email}}</strong></p>
                    <p style="padding-left: 500px;">Tanggal Lahir : <strong>{{$user->tanggal_lahir}}</strong></p>
                    <p style="padding-left: 500px;">Alamat : <strong>{{$user->alamat}}</strong></p>
                </div>
            @endforeach
        @endif
    </div>
</div>
@endsection