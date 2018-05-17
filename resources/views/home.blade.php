    @extends('app')
    @section('title')
        GalangDana! Peduli Sesama
    @endsection
    @section('content')
       <!-- scrollToTop -->
    <!-- ================ -->
    <div class="scrollToTop"><i class="icon-up-open-big"></i></div>
    <!-- banner start -->
    <!-- ================ -->
    <div id="banner" class="banner">
        <div class="banner-image"></div>
        <div class="banner-caption">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 object-non-visible" data-animation-effect="fadeIn">
                        <h1 style="font-size: 72px;">
                        <marquee scrollamount="10">Galang Dana <span>Online</span></marquee></h1>
                        <p style="font-size:20px;">Donasi kan hartamu kepada orang yang membutuhkan!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner end -->
    <!-- section start -->
    <!-- ================ -->
    <div class="section clearfix object-non-visible" data-animation-effect="fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 id="about" class="title text-center">Tentang <span>GalangDana</span></h1>
                    <p class="lead text-center">GalangDana adalah tempat menggalang dana online yang dibuat oleh mahasiswa ITS dari jurusan Teknik Informatika</p>
                    <div class="space"></div>
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{ asset('images/gd.jpg') }}" style="height: 200px; margin: 0 auto">
                            <div class="space"></div>
                        </div>
                        <div class="col-md-6">
                            <p>Menggalang Dana dengan GalangDana:</p>
                            <ul class="list-unstyled">
                                <li><i class="fa fa-caret-right pr-10 text-colored"></i> Buat galang dana dalam 5 menit</li>
                                <li><i class="fa fa-caret-right pr-10 text-colored"></i> Terima donasi dengan 5 pilihan bank dan kartu kredit</li>
                                <li><i class="fa fa-caret-right pr-10 text-colored"></i> Donasi otomatis terverifikasi oleh sistem</li>
                                <li><i class="fa fa-caret-right pr-10 text-colored"></i> Cairkan donasi kapan saja</li>
                                <li><i class="fa fa-caret-right pr-10 text-colored"></i> Mobile-friendly</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- section end -->

    <!-- section start -->
    <!-- ================ -->
    <div class="section translucent-bg bg-image-1 blue">
        <div class="container object-non-visible" data-animation-effect="fadeIn">
            <h1 id="services"  class="text-center title">Langkah Galang Dana Online</h1>
            <div class="space"></div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="media">
                        <div class="media-body text-right">
                            <h4 class="media-heading">Buat campaign galang dana</h4>
                            <p>Isi form online via laptop/PC dan ceritakan tujuan Anda menggalang dana.</p>
                        </div>
                        <div class="media-right">
                            <i class="fa fa-cog"></i>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-body text-right">
                            <h4 class="media-heading">Verifikasi identitas Anda</h4>
                            Upload KTP, foto dan akun social media Anda agar akun Anda terverifikasi.</p><p>PENTING: Akun yang belum terverifikasi tidak bisa mencairkan donasi.</p>
                        </div>
                        <div class="media-right">
                            <i class="fa fa-check"></i>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-body text-right">
                            <h4 class="media-heading">Share campaign Anda</h4>
                            <p>Ajak keluarga, teman dan kerabat berdonasi dengan 5 pilihan transfer bank atau kartu kredit. Nama mereka akan muncul di list donatur.</p><p>PENTING: Kesuksesan campaign bergantung sepenuhnya pada upaya Anda mengajak orang berdonasi.</p>
                        </div>
                        <div class="media-right">
                            <i class="fa fa-desktop"></i>
                        </div>
                    </div>
                    <div class="media">
                    </div>
                </div>
                <div class="space visible-xs"></div>
                <div class="col-sm-6">
                    <div class="media">
                        <div class="media-left">
                            <i class="fa fa-leaf"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Cairkan dana</h4>
                            <p>Cairkan donasi yang sudah terkumpul kapan saja ke rekening yang Anda tentukan melalui <a target="_blank" href="#">dompet kebaikan</a> Anda.</p>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-left">
                            <i class="fa fa-area-chart"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Tulis Update</h4>
                            <p>Ceritakan kabar gembira dan progres campaign Anda kepada para donatur yang juga akan terkirim langsung ke email mereka.</p>
                        </div>
                    </div>
                    <div class="media">
                    </div>
                    <div class="media">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- section end -->

    <!-- section start -->
    <!-- ================ -->
    <div class="default-bg space blue">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h1 class="text-center">Ayo Galang Dana Sekarang!</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- section end -->

    <!-- section start -->
    <!-- ================ -->
    <div class="section">
        <div class="container">
            <h1 class="text-center title" id="portfolio">Galang Dana sedang berjalan</h1>
            <div class="separator"></div>
            <p class="lead text-center">Pilih dan salurkan donasi untuk Galang Dana yang ada</p>
            <br>            
            <div class="row object-non-visible" data-animation-effect="fadeIn">
                <div class="col-md-12">

                    <!-- isotope filters start -->
                    <!--<div class="filters text-center">
                        <ul class="nav nav-pills">
                            <li class="active"><a href="#" data-filter="*">All</a></li>
                            <li><a href="#" data-filter=".web-design">Web design</a></li>
                            <li><a href="#" data-filter=".app-development">App development</a></li>
                            <li><a href="#" data-filter=".site-building">Site building</a></li>
                        </ul>
                    </div>
                    <!-- isotope filters end -->

                    <!-- portfolio items start -->
                    <?php 
                        $kegiatan = App\kegiatan::orderBy('id', 'desc')->limit(9)->get();
                    ?>
                    <div class="isotope-container row grid-space-20">
                    @foreach($kegiatan as $k)
                        <div class="col-sm-6 col-md-3 isotope-item web-design">
                            <div class="image-box">
                                <div class="overlay-container">
                                    <?php 
                                        $content = $k->foto_kegiatan;
                                        echo '<img src="data:image/jpeg;base64,'.base64_encode($content).'"';
                                        echo 'style="width: 100%; height: 250px" alt=""/>';
                                    ?>
                                    <a class="overlay" data-toggle="modal" data-target="#project-{{ $k->id }}">
                                        <i class="fa fa-search-plus"></i>
                                        <span>Detail</span>
                                    </a>
                                </div>
                                <a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-{{ $k->id }}">{{ $k->nama_kegiatan }}</a>
                            </div>
                            <!-- Modal -->
                            <div class="modal fade" id="project-{{ $k->id }}" tabindex="-1" role="dialog" aria-labelledby="project-{{ $k->id }}-label" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                            <h4 class="modal-title" id="project-{{ $k->id }}-label">{{ $k->nama_kegiatan }}</h4>
                                        </div>
                                        <div class="modal-body">
                                            <h3>Deskripsi</h3>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <p>{{ $k->deskripsi }}</p>
                                                </div>
                                                <div class="col-md-6">
                                                    <?php
                                                        echo '<img src="data:image/jpeg;base64,'.base64_encode($content).'"';
                                                        echo 'style="width: 100%; height: 300px" alt=""/>';
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal end -->
                        </div>
                    @endforeach
                    </div>
                    <!-- portfolio items end -->
                    <div class="container" style="text-align: center;">
                        <a href="{{ url('/donasi') }}"><button type="button" class="btn btn-info btn-lg">Lihat Semua</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- section end -->
    <!-- section start -->
    <!-- ================ -->
    <div class="default-bg space">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h1 class="text-center">10000+ Orang Terbantu,Ayo Teruskan!</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- section end -->
    <!-- footer start -->
    <!-- ================ -->
    <footer id="footer">

        <!-- .footer start -->
        <!-- ================ -->
        <div class="footer section">
            <div class="container">
                <h1 class="title text-center" id="contact">Contact Us</h1>
                <div class="space"></div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="footer-content">
                            <p class="large">Untuk verifikasi akun agar bisa melakukan Galang Dana</p>
                            <ul class="list-icons">
                                <li><i class="fa fa-map-marker pr-10"></i>Teknik Informatika ITS, Surabaya</li>
                                <li><i class="fa fa-phone pr-10"></i> +6281931066028</li>
                                <li><i class="fa fa-fax pr-10"></i> +62317882176</li>
                                <li><i class="fa fa-envelope-o pr-10"></i> GalangDanapedulisesama@gmail.com</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- .footer end -->
@endsection
