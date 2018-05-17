@extends('app')
@section('title')
    GalangDana.com
@endsection



@section('content')
<header>
	<style>
		.container {
    width: 94%;
    max-width: 1020px;
    margin: 0 auto;
}
.project-header--top {
    display: block;
    margin-bottom: 1.5em;
}
.project-title {
    max-width: 80%;
    margin-left: auto;
    margin-right: auto;
}
.project-title {
    margin-bottom: 1.5em;
    line-height: 1.2;
    font-weight: 700;
}
.page-title {
    font-size: 2.267em;
}
.align-center {
    text-align: center;
}
.custom-font, .legend--large, .nav-main__item, .header-actions__item, .home-slider__item .slide-title, .page-title, .main-quote, .thumb-list span, .project-status-title, .project-list__item .project-title, .project-short-story, .project-collected strong, .project-deadline-time, .notif-status, .rewards-list__item .reward-cta, .input-amount-currency, .usr-reg__head .title, .section-header, .notif--top, .partner-status__item span, .partner-story {
    font-family: "Open Sans",sans-serif;
}
h1 {
	margin-top: 300px;
}
.contribute-step-nav {
    font-size: 15px;
}
.contribute-step-nav {
    margin-bottom: 2em;
}
.contribute-form .input-target--grand {
    width: 70%;
    float: left;
    display: block;
    padding: .75em 1.5em;
    margin-bottom: .5em;
    line-height: 1.45em;
    background: #FFF;
    -webkit-box-shadow: 0 1px 2px rgba(0,0,0,0.15);
    box-shadow: 0 1px 2px rgba(0,0,0,0.15);
    font-size: 1.2em;
}

.white-box {
    padding: 20px 30px;
    box-shadow: 0 1px 2px rgba(0,0,0,0.15);
    background: #FFF;
}
.box-row {
    margin-bottom: 3.75em;
}
.project-header--top {
    margin-bottom: 1.5em;
   }
.content-head .legend--large {
    margin-bottom: 0;
    font-size: 1.6em;
    font-weight: 700;
}
.reg-campaign-box {
    background: rgba(255,255,255,0.5);
    border: 1px solid #e7e9eb;
    padding: 20px;}

    .form--big .form-label {
    font-size: 20px;
    }

    .col--m4 {
    width: 30.33333%;
}

.redactor-box, .redactor-box textarea {
    z-index: auto;
}

.redactor-box {
    background: #fff;
}
.redactor-box {
    position: relative;
    overflow: visible;
    margin-bottom: 24px;
    border: 1px solid #eee;
}

.form-input--block {
    width: 100%;
}

.form-input {
    padding: .5em;
    border: solid 1px #ccd0d3;
    font-family: inherit;
    background: #fff;
    border-radius: 5px;
}

textarea {
    resize: vertical;
}
.form-action {
    padding-top: 1em;
    border-top: 2px solid #fcfcfc;
}
.align-right {
    text-align: right;
}
.btn--border.btn--disabled {
    border-bottom: 10px #b1b6bb solid;
}
.btn--disabled {
    background: #ccd0d3;
    pointer-events: none;
    cursor: default;
}
.btn--large {
    padding: .75em 2.25em;
}
.btn, .btn--alt {
    display: inline-block;
    padding: .5em 1.5em;
    border: 0;
    font-family: "Open Sans",sans-serif;
    font-weight: 700;
    line-height: normal;
    text-align: center;
    vertical-align: middle;
    color: #333;
    background: #ddd;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    border-radius: 5px;
    -webkit-transition: all 0.35s ease;
    transition: all 0.35s ease;
    -webkit-tap-highlight-color: transparent;
}
button, select {
    text-transform: none;
}
button {
    overflow: visible;
}
button, input, optgroup, select, textarea {
    color: inherit;
    font: inherit;
    margin: 0;
}
</style>
</header>
<section>
<div class="container" style="margin-bottom: 100px">
	<div class="project-header--top">
		<h1 class="page-title project-title align-center">{{ $kegiatan->nama_kegiatan }}  </h1>
	</div>
    <form action="{{ url('/donasi/'.$kegiatan->id.'/bayar') }}" enctype="multipart/form-data" role="form" method="POST">
    {{ csrf_field() }}
	<div class="container reg-campaign-box" style="width: 55%;">
        <div class="form-group">
	       <h2 class="legend--large align-center">Masukkan Nominal Donasi</h2>
            <input type="text" class="form-control" id="JudulCampaign" placeholder="20000" name="jumlah_donasi">
        </div>
        <div class="form-group">
            <label for class="form-label col--m4">File input</label>
            <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" name="bukti_trf" required autofocus>
        </div>	
        <div class="form__row col">
            <h2 class="legend--large align-center">Tinggalkan Komentar(Optional)</h2>
            <div class="input-col col--m8">
                  <div class="form-info">
                        <span class="form-info--suggest">Isi komentar apapun tentang kegiatan galang dana tersebut </span>
                        <span class="form-info--counter" style="float:right;">
                            <span class="remain-char">0</span>/<span class="max-char">1080</span>
                        </span>
                  </div>
                  <textarea rows="2" maxlength="1080" class="form-input form-input--block input-max-char" name="Projects[short_description]" id="Projects_short_description"></textarea>
            </div>
        </div>
        <div class="form-group">
            <h2 class="legend--large align-center">Nomor HP</h2>
            <div class="form-info">
                <span class="form-info--suggest">Pastikan nomor ini aktif untuk menerima SMS status donasi Anda:</span>
                <span class="form-info--counter" style="float:right;">
            </div>
            <input type="text" class="form-control" id="JudulCampaign" placeholder="Masukan nomor HP Anda, angka saja. Format 08xxx atau 62xxx.">
        </div>
        <div class="box" id="termsCheckDonation">
            <input class="active" type="checkbox" checked="checked">
            <p>Saya<strong> mempercayai/mengenal campaigner </strong>ini<strong> </strong>dan <strong>setuju</strong> dengan <a href="" target="_blank">Syarat & Ketentuan Donasi</a> di GalangDana.com</p>
        </div>
    </div>
    <div class="form-action align-right">
        <button class="btn btn--block btn--border btn--large btn--pink" type="submit">DONASI</button>
    </div>
    </form>
</div>
</section>
@endsection