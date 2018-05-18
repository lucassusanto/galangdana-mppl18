@extends('app')
@section('title')
    GalangDana! Peduli Sesama
@endsection

@section('content')

    <div class="container" style="margin-top: 100px ;margin-bottom: 200px">
        <h2>{{$u->name}}</h2>
        <h3>
            @if($sumTransaksi>6500000)
                Platinum Member
            @elseif($sumTransaksi>4500000)
                Gold Member
            @elseif($sumTransaksi>2500000)
                Silver Member
            @elseif($sumTransaksi>500000)
                Bronze Member
            @else
                Member Biasa
            @endif
        </h3>
        <hr>
        <div class="row">
            @include('include.edit', ['passedUserId' => substr(Request::path(),5,1)])
            <div class="col-md-9 personal-info">
                <div class="row">
                    <div class="col-md-3" style="text-align: left; padding-left: 46px; font-weight: bold; color: #cd7f32">Bronze</div>
                    <div class="col-md-3" style="text-align: left; padding-left: 43px; font-weight: bold; color: #c0c0c0">Silver</div>
                    <div class="col-md-3" style="text-align: left; padding-left: 46px;font-weight: bold; color: #FFD700;">Gold</div>
                    <div class="col-md-3" style="text-align: left; padding-left: 33px;font-weight: bold; color: #9ac5db">Diamond</div>
                </div>
                <div class="row">
                    <div class="col-md-3" style="text-align: left; padding-left: 35px;">500.000,00</div>
                    <div class="col-md-3" style="text-align: left; padding-left: 20px;">2.500.000,00</div>
                    <div class="col-md-3" style="text-align: left; padding-left: 24px;">4.500.000,00</div>
                    <div class="col-md-3" style="text-align: left; padding-left: 24px;">6.500.000,00</div>
                </div>
                <br>
                <div class="row">
                    <div class="progress">
                        <div id="donasiBar" class="progress-bar progress-bar-striped progress-bar-success active" role="progressbar"
                             aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="">
                        </div>
                    </div>
                </div>
                <br><br>
                <div class="row">
                    <p style="text-align: center">total donasi terverifikasi sebesar</p>
                    <h2 style="text-align: center">Rp {{$sumTransaksi}},00</h2>
                </div>

                <div class="row" style="margin-top: 2em;">
                    <h4 style="font-weight: bold">Mengenai Achievement:</h4>
                    <ol>
                        <li>Sebuah bentuk apresiasi dari GalangDana kepada orang - orang baik yang mau peduli dan beraksi untuk masalah sosial yang ada</li>
                        <li>Total donasi yang dihitung adalah donasi anda <strong>yang sudah diverifikasi oleh pembuat kegiatan</strong></li>
                        <li>Achievement yang anda peroleh bedasarkan batas terbesar yang sudah anda lampaui</li>
                        <li>Apabila anda telah melakukan <strong>donasi terverifikasi</strong> sebesar Rp 600.000,00, maka anda layak memperoleh <strong>Bronze</strong></li>
                        <li>Apabila anda telah melakukan <strong>donasi terverifikasi</strong> sebesar Rp 3.000.000,00, maka anda layak memperoleh <strong>Silver</strong></li>
                        <li>Apabila anda telah melakukan <strong>donasi terverifikasi</strong> sebesar Rp 10.000.000,00, maka anda layak memperoleh <strong>Diamond</strong> dan merchandise khusus dari GalangDana</li>
                    </ol>
                </div>
            </div>

        </div>
    </div>
@endsection

@section('custom-script')
    <script>
        var now = {!! json_encode($sumTransaksi) !!}
        var finish = (now/8000000) * 100;
        $(document).ready(function() {
            var progression = 0,
                progress = setInterval(function()
                {
                    $('#donasiBar').css({'width':progression+'%'});
                    if(progression < finish) {
                        progression += 1;

                    } else
                        clearInterval(progress);

                }, 10);
        });
    </script>
@endsection
