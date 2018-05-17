@extends('app')

@section('title')
    GalangDana! Peduli Sesama
@endsection

@section('additional-style')
    <style>
        .member-card{
            background-color: #dbdbdb;
            font-weight: bold;
            color: black;
            height: 5em;
            width: 260px;
            margin: 2px;
            text-align: center;
            padding-top: 24px;
            border-radius: 10px;
        }

        .member-card:hover{
            background-color: #00b2ff;
            color: white;
        }
    </style>
@endsection

@section('content')
    <div class="container" style="margin-top: 100px ;margin-bottom: 200px">
        <h3 style="text-align: center">Orang - Orang Baik Penggalang Dana</h3>
        <br>
        <p style="text-align: center; padding-left: 100px; padding-right: 100px;">
        Orang - orang baik yang telah menunjukan aksi nyata kepeduliannya kepada sesama melalui aplikasi GalangDana.
        </p>
        <br><br>
        <div class="row" style="padding-left: 55px; font-size:15px;">
            @foreach($users as $user)
            <a href="/user/{{$user->id}}/profil">
                <div class="col-md-3 member-card">{{$user->name}}</div>
            </a>
            @endforeach
        </div>
    </div>
@endsection