@extends('app')
@section('title')
    GalangDana! Peduli Sesama
@endsection



@section('content')
<header>
    <style type="text/css">
        .col--m8 {
    width: 63.66667%;
}
[class^="col--"], [class*=" col--"] {
    float: left;
    margin-bottom: 0;
    margin-left: 3%;
}
.user-dashboard .page-title {
    font-size: 24px;
    margin-top: 0;
    padding-bottom: .75em;
    border-bottom: 2px solid #00aeef;
    color: #333;
    font-weight: 700;
}
.title {
    font-family: "Open Sans",sans-serif;
    line-height: 1.125;
}
form {
    display: block;
    margin-top: 0em;
}
.form__row {
    margin-bottom: .75em;
    position: relative;
}
.col {
    margin-left: -3%;
}
.col--m3 {
    width: 22%;
}
.form-label {
    display: block;
    margin-top: .5em;
}
label {
    cursor: default;
}
b, strong {
    font-weight: bold;
}
.col--m9 {
    width: 72%;
}
.ver-form #img-container3 {
    background: #e7e9eb;
    position: relative;
}
label {
    cursor: default;
}
img {
    max-width: 100%;
    vertical-align: middle;
    border: 0;
}
.inputImage__label {
    position: absolute;
    top: 75%;
    left: 50%;
    -webkit-transform: translate(-50%, -75%);
    -ms-transform: translate(-50%, -75%);
    transform: translate(-50%, -75%);
    cursor: pointer;
    width: 300px;
    text-align: center;
}
.inputImage__label {
    position: absolute;
    top: 75%;
    left: 50%;
    transform: translate(-50%, -75%);
    cursor: pointer;
    width: 300px;
    text-align: center;
}
.ver-form .img-container3 .cropper-bg {
    max-height: 360px !important;
}
.hidden {
    display: none !important;
    visibility: hidden;
}
textarea {
    resize: vertical;
    overflow: auto;
}
.col--m8 .grid {
    margin-left: -25px;
}
element.style {
    margin-top: 10px;
}
.btn--pink {
    background: #da336b;
    color: #FFF;
}
.btn--large {
    padding: .75em 2.25em;
}
.btn, .btn--alt {
    border: 0;
    font-family: "Open Sans",sans-serif;
    font-weight: 700;
    line-height: normal;
    text-align: center;
    vertical-align: middle;
    cursor: pointer;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    border-radius: 5px;
    transition: all 0.35s ease;
    -webkit-tap-highlight-color: transparent;
}
.show {
    display: block !important;
}
.ver-form .col--l8 {
    margin-bottom: 20px;
}
.btn--border.btn--blue {
    border-bottom: 10px #0089bc solid;
    border-bottom-width: 10px;
    border-bottom-style: solid;
    border-bottom-color: rgb(0, 137, 188);
}
.btn--blue {
    background: #00aeef;
    background-image: initial;
    background-position-x: initial;
    background-position-y: initial;
    background-size: initial;
    background-repeat-x: initial;
    background-repeat-y: initial;
    background-attachment: initial;
    background-origin: initial;
    background-clip: initial;
    background-color: rgb(0, 174, 239);
    color: #FFF;}
.ver-form .btn--blue {
    margin: 10px 0;
    margin-top: 10px;
    margin-right: 0px;
    margin-bottom: 10px;
    margin-left: 0px;
}
.container {
    width: 94%;
    max-width: 1020px;
    margin-top: 0px;
    margin-right: auto;
    margin-bottom: 0px;
    margin-left: auto;
    }
#register-campaign #termsCheckCampaigner {
    position: relative;
}
    </style>
</header>

<div class="container reg-campaign-box" style="margin-top: 100px ;margin-bottom: 200px">
    <h1>Verifikasi</h1>
    <hr>
    <div class="row">
    <!-- left column -->
        @include('include.edit')
        <div class="col-md-9 personal-info">
            @if(Auth::user()->tipe_user == 0)
                @if(Auth::user()->ktp != NULL)
                <div class="alert alert-warning">
                <i class="fa fa-exclamation-triangle"></i> Sedang menunggu Admin untuk verifikasi
                </div>
                @endif
            <div class="col--m8 col--l9">
                <form class="ver-form" role="form" method="POST" enctype="multipart/form-data" action="/user/{{ Auth::user()->id }}/verifikasi">
                {{ csrf_field() }}
                    <div class="form__row">
                        <div class="col">
                            <div class="col--m3">
                                <label for="" class="form-label"><b>Scan KTP / ID Lainnya</b></label>
                            </div>
                            <div class="col--m9"><br>
                                <div class="form-group">
                                    <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" name="ktp">
                                </div>
                                <p>Upload foto / scan KTP atau identitas lain. &nbsp;Kualitas scan harus jelas dan dapat terbaca dengan baik, terutama pada bagian nama lengkap, foto, dan tanda tangan.</p>
                            </div>
                        </div>
                    </div>
                    <div class="form__row">
                        <div class="col">
                            <div class="col--m3"><br>
                                <label for="" class="form-label"><b>Foto Verifikasi</b></label>
                            </div>
                            <div class="col--m9"><br>
                                <div class="form-group">
                                    <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" name="foto_diri">
                                </div>
                                <p>Mohon upload foto portrait anda dengan ketentuan sebagai berikut:</p>
                                <ul>
                                    <li>Foto portrait anda (setengah badan), harus asli,<strong> tanpa melalui proses editing</strong></li>
                                    <li>Membawa kertas putih yang bertuliskan
                                        <ul>
                                            <li>Nama lengkap Anda sesuai KTP</li>
                                            <li>Alamat email yang digunakan untuk login di Kitabisa.com</li>
                                            <li>Ada tulisan &quot;VERIFIED USER KITABISA&quot;</li>
                                            <li>Tanda tangan Anda</li>
                                            <li>Tanggal hari ini</li>
                                        </ul>
                                    </li>
                                    <li>Seluruh tulisan diatas haruslah <strong>ditulis tangan</strong>, bukan hasil cetakan / print</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="form__row">
                        <div class="col">
                            <div class="col--m3">
                                <label class="form-label"><b>Nomor Telepon</b></label>
                            </div>
                            <div class="col--m9">
                                <input name="nomor_hp" class="form-input form-input--block form-input--75" placeholder="08xxxxxxxxxx"></input>
                            </div>
                        </div>
                        <div class="col--l8">
                            <!--button type="submit" class="btn btn--blue btn--large btn--border" onclick="ga('send', 'event', 'dashboard.setting.get-verified.button-submit', 'click', 'dashboard.setting.get-verified.button-submit');">Simpan</button-->
                            <button type="submit" class="btn btn--blue btn--large btn--border">Simpan</button>
                        </div>
                    </div>
                </form>
                @else
        <div class="alert alert-success">
            <i class="fa fa-check"></i> Akun anda telah terverifikasi!
        </div>
        @endif
            </div>
        </div>
    </div>
</div>
@endsection
