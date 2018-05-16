@extends('app')
@section('title')
    GalangDana! Peduli Sesama
@endsection

@section('content')

    <div class="container" style="margin-top: 100px ;margin-bottom: 200px">
        <h3>Achievement (nama user)</h3>
        <hr>
        <div class="row">
            @include('include.edit')
            <div class="col-md-9 personal-info">
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
                <div class="row">
                    <h3 style="text-align: center">Rp {{$sumTransaksi}},00</h3>
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