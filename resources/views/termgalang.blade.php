@extends('app')
@section('title')
TCare! Peduli Sesama
@endsection
@section('content')
<header>
	<style type="text/css">
		.zone-white {
    	padding: 3em 0;
		}
		.container {
    width: 94%;
    max-width: 1020px;
    margin-top: 0px;
    margin-right: auto;
    margin-bottom: 0px;
    margin-left: auto;
	}
	h1, .h1 {
    font-size: 2.36859em;
    line-height: .94993;
    margin-top: 0.67em;
    margin-right: 0px;
    margin-bottom: 0.67em;
    margin-left: 0px;
	}
	.align-center {
    text-align: center;
}
	.col {
    margin-left: -3%;
}
* {
    box-sizing: border-box;
}
.col--m5 {
    width: 38.66667%;
}
[class^="col--"], [class*=" col--"] {
    float: left;
    margin-bottom: 0;
    margin-left: 3%;
}
.list-nostyle {
    list-style: none;
    margin: 0;
    padding: 0;
}
p, ul, ol, hr, table {
    line-height: 1.5;
}
ul, menu, dir {
    display: block;
    list-style-type: disc;
    -webkit-margin-before: 1em;
    -webkit-margin-after: 1em;
    -webkit-margin-start: 0px;
    -webkit-margin-end: 0px;
    -webkit-padding-start: 40px;
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
.btn--large {
    padding: .75em 2.25em;
}
.btn--block {
    width: 100%;
}
.btn--disabled {
    background: #ccd0d3;
    pointer-events: none;
    cursor: default;
}
.text-18 {
    font-size: 18px;
}
.col--m7 {
    width: 55.33333%;
}
.switcher__content {
    display: none;
}
.text-20 {
    font-size: 20px;
}
img {
    max-width: 100%;
    vertical-align: middle;
    border-top-color: initial;
    border-top-style: initial;
    border-top-width: 0px;
    border-right-color: initial;
    border-right-style: initial;
    border-right-width: 0px;
    border-bottom-color: initial;
    border-bottom-style: initial;
    border-bottom-width: 0px;
    border-left-color: initial;
    border-left-style: initial;
    border-left-width: 0px;
    border-image-source: initial;
    border-image-slice: initial;
    border-image-width: initial;
    border-image-outset: initial;
    border-image-repeat: initial
}
#register-campaign #termsCheckCampaigner {
    position: relative;
}
.box {
    position: relative;
    width: 100%;
    padding: 10px;
    background: #e7e9eb;
}
input[type="checkbox"], input[type="radio"] {
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    padding: 0;
}
.mySlides {display:none;}
	</style>
</header>
<section id="benefitSection" class="zone-white">
	<div class="container">
		<h1 class="align-center" style="margin-top: 100px">5 Langkah Mudah Menggalang Dana di <span>GalangDana</span> </h1>
	</div>
	<div class="switcher">
		<div class="container">
			<div class="col">
				<div class="col--m5">
					<div class="panel-group" id="accordion">
				    <div class="panel panel-default">
				      <div class="panel-heading">
				        <h4 class="panel-title">
				          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Buat campaign galang dana</a>
				        </h4>
				      </div>
				      <div id="collapse1" class="panel-collapse collapse in">
				        <div class="panel-body">Isi form online via laptop/PC dan ceritakan tujuan Anda menggalang dana.</div>
				      </div>
				    </div>
				    <div class="panel panel-default">
				      <div class="panel-heading">
				        <h4 class="panel-title">
				          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Verifikasi identitas Anda</a>
				        </h4>
				      </div>
				      <div id="collapse2" class="panel-collapse collapse">
				        <div class="panel-body"><p>Upload KTP, foto dan akun social media Anda agar akun Anda terverifikasi.</p><p>PENTING: Akun yang belum terverifikasi tidak bisa mencairkan donasi.</p></div>
				      </div>
				    </div>
				    <div class="panel panel-default">
				      <div class="panel-heading">
				        <h4 class="panel-title">
				          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Share campaign Anda</a>
				        </h4>
				      </div>
				      <div id="collapse3" class="panel-collapse collapse">
				        <div class="panel-body"><p>Ajak keluarga, teman dan kerabat berdonasi dengan 5 pilihan transfer bank atau kartu kredit. Nama mereka akan muncul di list donatur.</p><p>PENTING: Kesuksesan campaign bergantung sepenuhnya pada upaya Anda mengajak orang berdonasi.</p></div>
				      </div>
				    </div>
				    <div class="panel panel-default">
				      <div class="panel-heading">
				        <h4 class="panel-title">
				          <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Cairkan dana</a>
				        </h4>
				      </div>
				      <div id="collapse4" class="panel-collapse collapse">
				        <div class="panel-body"><p>Cairkan donasi yang sudah terkumpul kapan saja ke rekening yang Anda tentukan melalui <a target="_blank" href="#">dompet kebaikan</a> Anda.</p></div>
				      </div>
				    </div>
				    <div class="panel panel-default">
				      <div class="panel-heading">
				        <h4 class="panel-title">
				          <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">Tulis Update</a>
				        </h4>
				      </div>
				      <div id="collapse5" class="panel-collapse collapse">
				        <div class="panel-body"><p>Ceritakan kabar gembira dan progres campaign Anda kepada para donatur yang juga akan terkirim langsung ke email mereka.</p></div>
				      </div>
				    </div>
				  </div>
				  <br>
				<a href="{{ url('/galang')}}"><button class="btn btn--large btn--block text-18" type="submit" name="Projects[next]">Galang Dana Sekarang</button></a>
			</div>		
			<div class="col--m7 ">
					<img src="{{ asset('images/cara-kerja-1.gif') }}" alt="cara kerja 1">
			</div>
		</div>
	</div>
</div>
</section>
</main>
@endsection
