@extends('app')
@section('title')
GalangDana! Peduli Sesama
@endsection
@section('content')
<header>
<style type="text/css">
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
</style>

</header>
<form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data" action="{{ url('/campaign/'.$kegiatan->id.'/update') }}" style="margin:150px 0">
{{ csrf_field() }}
<div class="container reg-campaign-box" style="margin-top: 100px; width: 55%;">
  <div class="form-group">
    <label for="form-label col--m4">Judul Kegiatan</label>
    <input value="{{$kegiatan->nama_kegiatan}}" type="text" class="form-control" id="JudulCampaign" placeholder="Judul Campaign" name="nama_kegiatan" required autofocus>
  </div>
  <div class="form-group">
    <label for="form-label col--m4">Target Dana</label>
    <input value="{{$kegiatan->uang_target}}"type="text" class="form-control" id="TargetDana" placeholder="Target Dana" name="uang_target" required autofocus>
  </div>
  <div class="form-group">
    <label for="form-label col--m4">Deadline Kegiatan</label>
    <input value="{{$kegiatan->deadline}}"type="date" class="form-control" id="DeadlineCampaign" placeholder="Deadline Campaign" name="deadline" required autofocus>
  </div>
  <div class="form-group">
    <label for="form-label col--m4">Kategori Kegiatan</label>
    <select class="form-control" id="exampleSelect1">
      <option value="">Pilih kategori yang paling sesuai</option>
      <option value="10">Atlet &amp; Fasilitas Olahraga</option>
      <option value="8">Balita &amp; Anak Sakit</option>
      <option value="9">Bantuan Medis &amp; Kesehatan</option>
      <option value="5">Beasiswa &amp; Pendidikan</option>
      <option value="22">Bencana Alam &amp; Kemanusiaan</option>
      <option value="26">Birthday Fundraising</option>
      <option value="24">Difabel</option>
      <option value="7">Event &amp; Kegiatan Sosial</option>
      <option value="21">Hadiah &amp; Apresiasi</option>
      <option value="13">Karya Kreatif (Film, Buku, dll)</option>
      <option value="20">Kategori Lainnya</option>
      <option value="19">Menolong Hewan</option>
      <option value="28">Panti Asuhan</option>
      <option value="6">Pelestarian Lingkungan</option>
      <option value="33">Pemberdayaan &amp; Modal Usaha</option>
      <option value="30">Personal Challenge</option>
      <option value="3">Produk &amp; Inovasi</option>
      <option value="23">Rumah Ibadah</option>
      <option value="11">Sarana &amp; Infrastruktur</option>
    </select>
  </div>
  <div class="form-group">
    <label for class="form-label col--m4">Lokasi Campaign</label>
    <select class="form-control" id="exampleSelect1">
      <option value="">Pilih lokasi penerima dana campaign</option>
      <option value="7">Kab. Aceh Barat, Aceh</option>
      <option value="12">Kab. Aceh Barat Daya, Aceh</option>
      <option value="8">Kab. Aceh Besar, Aceh</option>
      <option value="16">Kab. Aceh Jaya, Aceh</option>
      <option value="3">Kab. Aceh Selatan, Aceh</option>
      <option value="2">Kab. Aceh Singkil, Aceh</option>
      <option value="14">Kab. Aceh Tamiang, Aceh</option>
      <option value="6">Kab. Aceh Tengah, Aceh</option>
      <option value="4">Kab. Aceh Tenggara, Aceh</option>
      <option value="5">Kab. Aceh Timur, Aceh</option>
      <option value="11">Kab. Aceh Utara, Aceh</option>
      <option value="63">Kab. Agam, Sumatera Barat</option>
      <option value="298">Kab. Alor, Nusa Tenggara Timur</option>
      <option value="450">Kota Ambon, Maluku</option>
      <option value="31">Kab. Asahan, Sumatera Utara</option>
      <option value="483">Kab. Asmat, Papua</option>
      <option value="274">Kab. Badung, Bali</option>
      <option value="351">Kab. Balangan, Kalimantan Selatan</option>
      <option value="360">Kota Balikpapan, Kalimantan Timur</option>
      <option value="19">Kota Banda Aceh, Aceh</option>
      <option value="137">Kota Bandar Lampung, Lampung</option>
      <option value="162">Kab. Bandung, Jawa Barat</option>
      <option value="179">Kota Bandung, Jawa Barat</option>
      <option value="175">Kab. Bandung Barat, Jawa Barat</option>
      <option value="384">Kab. Banggai, Sulawesi Tengah</option>
      <option value="383">Kab. Banggai Kepulauan, Sulawesi Tengah</option>
      <option value="139">Kab. Bangka, Kepulauan Bangka Belitung</option>
      <option value="141">Kab. Bangka Barat, Kepulauan Bangka Belitung</option>
      <option value="143">Kab. Bangka Selatan, Kepulauan Bangka Belitung</option>
      <option value="142">Kab. Bangka Tengah, Kepulauan Bangka Belitung</option>
      <option value="251">Kab. Bangkalan, Jawa Timur</option>
      <option value="277">Kab. Bangli, Bali</option>
      <option value="185">Kota Banjar, Jawa Barat</option>
      <option value="343">Kab. Banjar, Kalimantan Selatan</option>
      <option value="353">Kota Banjar Baru, Kalimantan Selatan</option>
      <option value="352">Kota Banjarmasin, Kalimantan Selatan</option>
      <option value="189">Kab. Banjarnegara, Jawa Tengah</option>
      <option value="396">Kab. Bantaeng, Sulawesi Selatan</option>
      <option value="222">Kab. Bantul, Daerah Istimewa Yogyakarta</option>
      <option value="105">Kab. Banyu Asin, Sumatera Selatan</option>
      <option value="187">Kab. Banyumas, Jawa Tengah</option>
      <option value="235">Kab. Banyuwangi, Jawa Timur</option>
      <option value="344">Kab. Barito Kuala, Kalimantan Selatan</option>
      <option value="330">Kab. Barito Selatan, Kalimantan Tengah</option>
      <option value="338">Kab. Barito Timur, Kalimantan Tengah</option>
      <option value="331">Kab. Barito Utara, Kalimantan Tengah</option>
      <option value="403">Kab. Barru, Sulawesi Selatan</option>
      <option value="151">Kota Batam, Kepulauan Riau</option>
      <option value="210">Kab. Batang, Jawa Tengah</option>
      <option value="91">Kab. Batang Hari, Jambi</option>
      <option value="263">Kota Batu, Jawa Timur</option>
      <option value="42">Kab. Batu Bara, Sumatera Utara</option>
      <option value="429">Kota Baubau, Sulawesi Tenggara</option>
      <option value="174">Kab. Bekasi, Jawa Barat</option>
      <option value="181">Kota Bekasi, Jawa Barat</option>
      <option value="140">Kab. Belitung, Kepulauan Bangka Belitung</option>
      <option value="144">Kab. Belitung Timur, Kepulauan Bangka Belitung</option>
      <option value="296">Kab. Belu, Nusa Tenggara Timur</option>
      <option value="297">Kab. Belu, Nusa Tenggara Timur</option>
      <option value="17">Kab. Bener Meriah, Aceh</option>
      <option value="83">Kab. Bengkalis, Riau</option>
      <option value="314">Kab. Bengkayang, Kalimantan Barat</option>
      <option value="123">Kota Bengkulu, Bengkulu</option>
      <option value="114">Kab. Bengkulu Selatan, Bengkulu</option>
      <option value="122">Kab. Bengkulu Tengah, Bengkulu</option>
      <option value="116">Kab. Bengkulu Utara, Bengkulu</option>
      <option value="358">Kab. Berau, Kalimantan Timur</option>
      <option value="477">Kab. Biak Numfor, Papua</option>
      <option value="286">Kab. Bima, Nusa Tenggara Barat</option>
      <option value="290">Kota Bima, Nusa Tenggara Barat</option>
      <option value="54">Kota Binjai, Sumatera Utara</option>
      <option value="147">Kab. Bintan, Kepulauan Riau</option>
      <option value="10">Kab. Bireuen, Aceh</option>
      <option value="380">Kota Bitung, Sulawesi Utara</option>
      <option value="230">Kab. Blitar, Jawa Timur</option>
      <option value="256">Kota Blitar, Jawa Timur</option>
      <option value="201">Kab. Blora, Jawa Tengah</option>
      <option value="430">Kab. Boalemo, Gorontalo</option>
      <option value="159">Kab. Bogor, Jawa Barat</option>
      <option value="177">Kota Bogor, Jawa Barat</option>
      <option value="247">Kab. Bojonegoro, Jawa Timur</option>
      <option value="368">Kab. Bolaang Mongondow, Sulawesi Utara</option>
      <option value="377">Kab. Bolaang Mongondow Selatan, Sulawesi Utara</option>
      <option value="378">Kab. Bolaang Mongondow Timur, Sulawesi Utara</option>
      <option value="374">Kab. Bolaang Mongondow Utara, Sulawesi Utara</option>
      <option value="423">Kab. Bombana, Sulawesi Tenggara</option>
      <option value="236">Kab. Bondowoso, Jawa Timur</option>
      <option value="404">Kab. Bone, Sulawesi Selatan</option>
      <option value="433">Kab. Bone Bolango, Gorontalo</option>
      <option value="362">Kota Bontang, Kalimantan Timur</option>
      <option value="481">Kab. Boven Digoel, Papua</option>
      <option value="194">Kab. Boyolali, Jawa Tengah</option>
      <option value="214">Kab. Brebes, Jawa Tengah</option>
      <option value="73">Kota Bukittinggi, Sumatera Barat</option>
      <option value="279">Kab. Buleleng, Bali</option>
      <option value="395">Kab. Bulukumba, Sulawesi Selatan</option>
      <option value="364">Kab. Bulungan, Kalimantan Utara</option>
      <option value="96">Kab. Bungo, Jambi</option>
      <option value="389">Kab. Buol, Sulawesi Tengah</option>
      <option value="444">Kab. Buru, Maluku</option>
      <option value="449">Kab. Buru Selatan, Maluku</option>
      <option value="418">Kab. Buton, Sulawesi Tenggara</option>
      <option value="426">Kab. Buton Utara, Sulawesi Tenggara</option>
      <option value="165">Kab. Ciamis, Jawa Barat</option>
      <option value="161">Kab. Cianjur, Jawa Barat</option>
      <option value="186">Kab. Cilacap, Jawa Tengah</option>
      <option value="269">Kota Cilegon, Banten</option>
      <option value="183">Kota Cimahi, Jawa Barat</option>
      <option value="167">Kab. Cirebon, Jawa Barat</option>
      <option value="180">Kota Cirebon, Jawa Barat</option>
      <option value="33">Kab. Dairi, Sumatera Utara</option>
      <option value="499">Kab. Deiyai, Papua</option>
      <option value="35">Kab. Deli Serdang, Sumatera Utara</option>
      <option value="206">Kab. Demak, Jawa Tengah</option>
      <option value="280">Kota Denpasar, Bali</option>
      <option value="182">Kota Depok, Jawa Barat</option>
      <option value="67">Kab. Dharmasraya, Sumatera Barat</option>
      <option value="497">Kab. Dogiyai, Papua</option>
      <option value="285">Kab. Dompu, Nusa Tenggara Barat</option>
      <option value="387">Kab. Donggala, Sulawesi Tengah</option>
      <option value="87">Kota Dumai, Riau</option>
      <option value="109">Kab. Empat Lawang, Sumatera Selatan</option>
      <option value="302">Kab. Ende, Nusa Tenggara Timur</option>
      <option value="409">Kab. Enrekang, Sulawesi Selatan</option>
      <option value="461">Kab. Fakfak, Papua Barat</option>
      <option value="300">Kab. Flores Timur, Nusa Tenggara Timur</option>
      <option value="163">Kab. Garut, Jawa Barat</option>
      <option value="13">Kab. Gayo Lues, Aceh</option>
      <option value="275">Kab. Gianyar, Bali</option>
      <option value="431">Kab. Gorontalo, Gorontalo</option>
      <option value="435">Kota Gorontalo, Gorontalo</option>
      <option value="434">Kab. Gorontalo Utara, Gorontalo</option>
      <option value="399">Kab. Gowa, Sulawesi Selatan</option>
      <option value="250">Kab. Gresik, Jawa Timur</option>
      <option value="200">Kab. Grobogan, Jawa Tengah</option>
      <option value="223">Kab. Gunung Kidul, Daerah Istimewa Yogyakarta</option>
      <option value="337">Kab. Gunung Mas, Kalimantan Tengah</option>
      <option value="56">Kota Gunungsitoli, Sumatera Utara</option>
      <option value="452">Kab. Halmahera Barat, Maluku Utara</option>
      <option value="455">Kab. Halmahera Selatan, Maluku Utara</option>
      <option value="453">Kab. Halmahera Tengah, Maluku Utara</option>
      <option value="457">Kab. Halmahera Timur, Maluku Utara</option>
      <option value="456">Kab. Halmahera Utara, Maluku Utara</option>
      <option value="346">Kab. Hulu Sungai Selatan, Kalimantan Selatan</option>
      <option value="347">Kab. Hulu Sungai Tengah, Kalimantan Selatan</option>
      <option value="348">Kab. Hulu Sungai Utara, Kalimantan Selatan</option>
      <option value="38">Kab. Humbang Hasundutan, Sumatera Utara</option>
      <option value="78">Kab. Indragiri Hilir, Riau</option>
      <option value="77">Kab. Indragiri Hulu, Riau</option>
      <option value="170">Kab. Indramayu, Jawa Barat</option>
      <option value="498">Kab. Intan Jaya, Papua</option>
      <option value="157">Kota Jakarta Barat, DKI Jakarta</option>
      <option value="156">Kota Jakarta Pusat, DKI Jakarta</option>
      <option value="154">Kota Jakarta Selatan, DKI Jakarta</option>
      <option value="155">Kota Jakarta Timur, DKI Jakarta</option>
      <option value="158">Kota Jakarta Utara, DKI Jakarta</option>
      <option value="97">Kota Jambi, Jambi</option>
      <option value="474">Kab. Jayapura, Papua</option>
      <option value="500">Kota Jayapura, Papua</option>
      <option value="473">Kab. Jayawijaya, Papua</option>
      <option value="234">Kab. Jember, Jawa Timur</option>
      <option value="272">Kab. Jembrana, Bali</option>
      <option value="397">Kab. Jeneponto, Sulawesi Selatan</option>
      <option value="205">Kab. Jepara, Jawa Tengah</option>
      <option value="242">Kab. Jombang, Jawa Timur</option>
      <option value="462">Kab. Kaimana, Papua Barat</option>
      <option value="81">Kab. Kampar, Riau</option>
      <option value="329">Kab. Kapuas, Kalimantan Tengah</option>
      <option value="320">Kab. Kapuas Hulu, Kalimantan Barat</option>
      <option value="278">Kab. Karang Asem, Bali</option>
      <option value="198">Kab. Karanganyar, Jawa Tengah</option>
      <option value="173">Kab. Karawang, Jawa Barat</option>
      <option value="146">Kab. Karimun, Kepulauan Riau</option>
      <option value="34">Kab. Karo, Sumatera Utara</option>
      <option value="335">Kab. Katingan, Kalimantan Tengah</option>
      <option value="117">Kab. Kaur, Bengkulu</option>
      <option value="323">Kab. Kayong Utara, Kalimantan Barat</option>
      <option value="190">Kab. Kebumen, Jawa Tengah</option>
      <option value="231">Kab. Kediri, Jawa Timur</option>
      <option value="255">Kota Kediri, Jawa Timur</option>
      <option value="488">Kab. Keerom, Papua</option>
      <option value="209">Kab. Kendal, Jawa Tengah</option>
      <option value="428">Kota Kendari, Sulawesi Tenggara</option>
      <option value="121">Kab. Kepahiang, Bengkulu</option>
      <option value="150">Kab. Kepulauan Anambas, Kepulauan Riau</option>
      <option value="445">Kab. Kepulauan Aru, Maluku</option>
      <option value="57">Kab. Kepulauan Mentawai, Sumatera Barat</option>
      <option value="85">Kab. Kepulauan Meranti, Riau</option>
      <option value="370">Kab. Kepulauan Sangihe, Sulawesi Utara</option>
      <option value="394">Kab. Kepulauan Selayar, Sulawesi Selatan</option>
      <option value="153">Kab. Kepulauan Seribu, DKI Jakarta</option>
      <option value="454">Kab. Kepulauan Sula, Maluku Utara</option>
      <option value="371">Kab. Kepulauan Talaud, Sulawesi Utara</option>
      <option value="476">Kab. Kepulauan Yapen, Papua</option>
      <option value="88">Kab. Kerinci, Jambi</option>
      <option value="318">Kab. Ketapang, Kalimantan Barat</option>
      <option value="195">Kab. Klaten, Jawa Tengah</option>
      <option value="276">Kab. Klungkung, Bali</option>
      <option value="421">Kab. Kolaka, Sulawesi Tenggara</option>
      <option value="425">Kab. Kolaka Utara, Sulawesi Tenggara</option>
      <option value="420">Kab. Konawe, Sulawesi Tenggara</option>
      <option value="422">Kab. Konawe Selatan, Sulawesi Tenggara</option>
      <option value="427">Kab. Konawe Utara, Sulawesi Tenggara</option>
      <option value="342">Kab. Kota Baru, Kalimantan Selatan</option>
      <option value="382">Kota Kotamobagu, Sulawesi Utara</option>
      <option value="327">Kab. Kotawaringin Barat, Kalimantan Tengah</option>
      <option value="328">Kab. Kotawaringin Timur, Kalimantan Tengah</option>
      <option value="76">Kab. Kuantan Singingi, Riau</option>
      <option value="324">Kab. Kubu Raya, Kalimantan Barat</option>
      <option value="204">Kab. Kudus, Jawa Tengah</option>
      <option value="221">Kab. Kulon Progo, Daerah Istimewa Yogyakarta</option>
      <option value="166">Kab. Kuningan, Jawa Barat</option>
      <option value="293">Kab. Kupang, Nusa Tenggara Timur</option>
      <option value="312">Kota Kupang, Nusa Tenggara Timur</option>
      <option value="355">Kab. Kutai Barat, Kalimantan Timur</option>
      <option value="356">Kab. Kutai Kartanegara, Kalimantan Timur</option>
      <option value="357">Kab. Kutai Timur, Kalimantan Timur</option>
      <option value="30">Kab. Labuhan Batu, Sumatera Utara</option>
      <option value="45">Kab. Labuhan Batu Selatan, Sumatera Utara</option>
      <option value="46">Kab. Labuhan Batu Utara, Sumatera Utara</option>
      <option value="102">Kab. Lahat, Sumatera Selatan</option>
      <option value="333">Kab. Lamandau, Kalimantan Tengah</option>
      <option value="249">Kab. Lamongan, Jawa Timur</option>
      <option value="124">Kab. Lampung Barat, Lampung</option>
      <option value="126">Kab. Lampung Selatan, Lampung</option>
      <option value="128">Kab. Lampung Tengah, Lampung</option>
      <option value="127">Kab. Lampung Timur, Lampung</option>
      <option value="129">Kab. Lampung Utara, Lampung</option>
      <option value="315">Kab. Landak, Kalimantan Barat</option>
      <option value="36">Kab. Langkat, Sumatera Utara</option>
      <option value="21">Kota Langsa, Aceh</option>
      <option value="493">Kab. Lanny Jaya, Papua</option>
      <option value="265">Kab. Lebak, Banten</option>
      <option value="120">Kab. Lebong, Bengkulu</option>
      <option value="299">Kab. Lembata, Nusa Tenggara Timur</option>
      <option value="22">Kota Lhokseumawe, Aceh</option>
      <option value="64">Kab. Lima Puluh Kota, Sumatera Barat</option>
      <option value="149">Kab. Lingga, Kepulauan Riau</option>
      <option value="281">Kab. Lombok Barat, Nusa Tenggara Barat</option>
      <option value="282">Kab. Lombok Tengah, Nusa Tenggara Barat</option>
      <option value="283">Kab. Lombok Timur, Nusa Tenggara Barat</option>
      <option value="288">Kab. Lombok Utara, Nusa Tenggara Barat</option>
      <option value="113">Kota Lubuklinggau, Sumatera Selatan</option>
      <option value="233">Kab. Lumajang, Jawa Timur</option>
      <option value="410">Kab. Luwu, Sulawesi Selatan</option>
      <option value="413">Kab. Luwu Timur, Sulawesi Selatan</option>
      <option value="412">Kab. Luwu Utara, Sulawesi Selatan</option>
      <option value="244">Kab. Madiun, Jawa Timur</option>
      <option value="261">Kota Madiun, Jawa Timur</option>
      <option value="193">Kab. Magelang, Jawa Tengah</option>
      <option value="215">Kota Magelang, Jawa Tengah</option>
      <option value="245">Kab. Magetan, Jawa Timur</option>
      <option value="168">Kab. Majalengka, Jawa Barat</option>
      <option value="436">Kab. Majene, Sulawesi Barat</option>
      <option value="415">Kota Makassar, Sulawesi Selatan</option>
      <option value="232">Kab. Malang, Jawa Timur</option>
      <option value="257">Kota Malang, Jawa Timur</option>
      <option value="363">Kab. Malinau, Kalimantan Utara</option>
      <option value="448">Kab. Maluku Barat Daya, Maluku</option>
      <option value="443">Kab. Maluku Tengah, Maluku</option>
      <option value="442">Kab. Maluku Tenggara, Maluku</option>
      <option value="441">Kab. Maluku Tenggara Barat, Maluku</option>
      <option value="438">Kab. Mamasa, Sulawesi Barat</option>
      <option value="491">Kab. Mamberamo Raya, Papua</option>
      <option value="494">Kab. Mamberamo Tengah, Papua</option>
      <option value="439">Kab. Mamuju, Sulawesi Barat</option>
      <option value="440">Kab. Mamuju Utara, Sulawesi Barat</option>
      <option value="379">Kota Manado, Sulawesi Utara</option>
      <option value="25">Kab. Mandailing Natal, Sumatera Utara</option>
      <option value="304">Kab. Manggarai, Nusa Tenggara Timur</option>
      <option value="306">Kab. Manggarai Barat, Nusa Tenggara Timur</option>
      <option value="310">Kab. Manggarai Timur, Nusa Tenggara Timur</option>
      <option value="465">Kab. Manokwari, Papua Barat</option>
      <option value="482">Kab. Mappi, Papua</option>
      <option value="401">Kab. Maros, Sulawesi Selatan</option>
      <option value="289">Kota Mataram, Nusa Tenggara Barat</option>
      <option value="470">Kab. Maybrat, Papua Barat</option>
      <option value="53">Kota Medan, Sumatera Utara</option>
      <option value="322">Kab. Melawi, Kalimantan Barat</option>
      <option value="89">Kab. Merangin, Jambi</option>
      <option value="472">Kab. Merauke, Papua</option>
      <option value="134">Kab. Mesuji, Lampung</option>
      <option value="138">Kota Metro, Lampung</option>
      <option value="480">Kab. Mimika, Papua</option>
      <option value="369">Kab. Minahasa, Sulawesi Utara</option>
      <option value="372">Kab. Minahasa Selatan, Sulawesi Utara</option>
      <option value="376">Kab. Minahasa Tenggara, Sulawesi Utara</option>
      <option value="373">Kab. Minahasa Utara, Sulawesi Utara</option>
      <option value="241">Kab. Mojokerto, Jawa Timur</option>
      <option value="260">Kota Mojokerto, Jawa Timur</option>
      <option value="385">Kab. Morowali, Sulawesi Tengah</option>
      <option value="101">Kab. Muara Enim, Sumatera Selatan</option>
      <option value="92">Kab. Muaro Jambi, Jambi</option>
      <option value="119">Kab. Mukomuko, Bengkulu</option>
      <option value="419">Kab. Muna, Sulawesi Tenggara</option>
      <option value="339">Kab. Murung Raya, Kalimantan Tengah</option>
      <option value="104">Kab. Musi Banyuasin, Sumatera Selatan</option>
      <option value="103">Kab. Musi Rawas, Sumatera Selatan</option>
      <option value="475">Kab. Nabire, Papua</option>
      <option value="15">Kab. Nagan Raya, Aceh</option>
      <option value="309">Kab. Nagekeo, Nusa Tenggara Timur</option>
      <option value="148">Kab. Natuna, Kepulauan Riau</option>
      <option value="492">Kab. Nduga, Papua</option>
      <option value="303">Kab. Ngada, Nusa Tenggara Timur</option>
      <option value="243">Kab. Nganjuk, Jawa Timur</option>
      <option value="246">Kab. Ngawi, Jawa Timur</option>
      <option value="24">Kab. Nias, Sumatera Utara</option>
      <option value="48">Kab. Nias Barat, Sumatera Utara</option>
      <option value="37">Kab. Nias Selatan, Sumatera Utara</option>
      <option value="47">Kab. Nias Utara, Sumatera Utara</option>
      <option value="366">Kab. Nunukan, Kalimantan Utara</option>
      <option value="108">Kab. Ogan Ilir, Sumatera Selatan</option>
      <option value="100">Kab. Ogan Komering Ilir, Sumatera Selatan</option>
      <option value="99">Kab. Ogan Komering Ulu, Sumatera Selatan</option>
      <option value="106">Kab. Ogan Komering Ulu Selatan, Sumatera Selatan</option>
      <option value="107">Kab. Ogan Komering Ulu Timur, Sumatera Selatan</option>
      <option value="226">Kab. Pacitan, Jawa Timur</option>
      <option value="69">Kota Padang, Sumatera Barat</option>
      <option value="44">Kab. Padang Lawas, Sumatera Utara</option>
      <option value="43">Kab. Padang Lawas Utara, Sumatera Utara</option>
      <option value="72">Kota Padang Panjang, Sumatera Barat</option>
      <option value="62">Kab. Padang Pariaman, Sumatera Barat</option>
      <option value="55">Kota Padangsidimpuan, Sumatera Utara</option>
      <option value="112">Kota Pagar Alam, Sumatera Selatan</option>
      <option value="39">Kab. Pakpak Bharat, Sumatera Utara</option>
      <option value="340">Kota Palangka Raya, Kalimantan Tengah</option>
      <option value="110">Kota Palembang, Sumatera Selatan</option>
      <option value="417">Kota Palopo, Sulawesi Selatan</option>
      <option value="393">Kota Palu, Sulawesi Tengah</option>
      <option value="253">Kab. Pamekasan, Jawa Timur</option>
      <option value="264">Kab. Pandeglang, Banten</option>
      <option value="176">Kab. Pangandaran, Jawa Barat</option>
      <option value="402">Kab. Pangkajene Dan Kepulauan, Sulawesi Selatan</option>
      <option value="145">Kota Pangkal Pinang, Kepulauan Bangka Belitung</option>
      <option value="478">Kab. Paniai, Papua</option>
      <option value="416">Kota Parepare, Sulawesi Selatan</option>
      <option value="75">Kota Pariaman, Sumatera Barat</option>
      <option value="390">Kab. Parigi Moutong, Sulawesi Tengah</option>
      <option value="65">Kab. Pasaman, Sumatera Barat</option>
      <option value="68">Kab. Pasaman Barat, Sumatera Barat</option>
      <option value="354">Kab. Paser, Kalimantan Timur</option>
      <option value="239">Kab. Pasuruan, Jawa Timur</option>
      <option value="259">Kota Pasuruan, Jawa Timur</option>
      <option value="203">Kab. Pati, Jawa Tengah</option>
      <option value="74">Kota Payakumbuh, Sumatera Barat</option>
      <option value="485">Kab. Pegunungan Bintang, Papua</option>
      <option value="211">Kab. Pekalongan, Jawa Tengah</option>
      <option value="219">Kota Pekalongan, Jawa Tengah</option>
      <option value="86">Kota Pekanbaru, Riau</option>
      <option value="79">Kab. Pelalawan, Riau</option>
      <option value="212">Kab. Pemalang, Jawa Tengah</option>
      <option value="51">Kota Pematang Siantar, Sumatera Utara</option>
      <option value="359">Kab. Penajam Paser Utara, Kalimantan Timur</option>
      <option value="132">Kab. Pesawaran, Lampung</option>
      <option value="136">Kab. Pesisir Barat, Lampung</option>
      <option value="58">Kab. Pesisir Selatan, Sumatera Barat</option>
      <option value="9">Kab. Pidie, Aceh</option>
      <option value="18">Kab. Pidie Jaya, Aceh</option>
      <option value="408">Kab. Pinrang, Sulawesi Selatan</option>
      <option value="432">Kab. Pohuwato, Gorontalo</option>
      <option value="437">Kab. Polewali Mandar, Sulawesi Barat</option>
      <option value="227">Kab. Ponorogo, Jawa Timur</option>
      <option value="316">Kab. Pontianak, Kalimantan Barat</option>
      <option value="325">Kota Pontianak, Kalimantan Barat</option>
      <option value="386">Kab. Poso, Sulawesi Tengah</option>
      <option value="111">Kota Prabumulih, Sumatera Selatan</option>
      <option value="133">Kab. Pringsewu, Lampung</option>
      <option value="238">Kab. Probolinggo, Jawa Timur</option>
      <option value="258">Kota Probolinggo, Jawa Timur</option>
      <option value="336">Kab. Pulang Pisau, Kalimantan Tengah</option>
      <option value="458">Kab. Pulau Morotai, Maluku Utara</option>
      <option value="496">Kab. Puncak, Papua</option>
      <option value="479">Kab. Puncak Jaya, Papua</option>
      <option value="188">Kab. Purbalingga, Jawa Tengah</option>
      <option value="172">Kab. Purwakarta, Jawa Barat</option>
      <option value="191">Kab. Purworejo, Jawa Tengah</option>
      <option value="468">Kab. Raja Ampat, Papua Barat</option>
      <option value="115">Kab. Rejang Lebong, Bengkulu</option>
      <option value="202">Kab. Rembang, Jawa Tengah</option>
      <option value="84">Kab. Rokan Hilir, Riau</option>
      <option value="82">Kab. Rokan Hulu, Riau</option>
      <option value="305">Kab. Rote Ndao, Nusa Tenggara Timur</option>
      <option value="20">Kota Sabang, Aceh</option>
      <option value="311">Kab. Sabu Raijua, Nusa Tenggara Timur</option>
      <option value="217">Kota Salatiga, Jawa Tengah</option>
      <option value="361">Kota Samarinda, Kalimantan Timur</option>
      <option value="313">Kab. Sambas, Kalimantan Barat</option>
      <option value="40">Kab. Samosir, Sumatera Utara</option>
      <option value="252">Kab. Sampang, Jawa Timur</option>
      <option value="317">Kab. Sanggau, Kalimantan Barat</option>
      <option value="487">Kab. Sarmi, Papua</option>
      <option value="90">Kab. Sarolangun, Jambi</option>
      <option value="71">Kota Sawah Lunto, Sumatera Barat</option>
      <option value="321">Kab. Sekadau, Kalimantan Barat</option>
      <option value="118">Kab. Seluma, Bengkulu</option>
      <option value="207">Kab. Semarang, Jawa Tengah</option>
      <option value="218">Kota Semarang, Jawa Tengah</option>
      <option value="446">Kab. Seram Bagian Barat, Maluku</option>
      <option value="447">Kab. Seram Bagian Timur, Maluku</option>
      <option value="267">Kab. Serang, Banten</option>
      <option value="270">Kota Serang, Banten</option>
      <option value="41">Kab. Serdang Bedagai, Sumatera Utara</option>
      <option value="334">Kab. Seruyan, Kalimantan Tengah</option>
      <option value="80">Kab. Siak, Riau</option>
      <option value="375">Kab. Siau Tagulandang Biaro, Sulawesi Utara</option>
      <option value="49">Kota Sibolga, Sumatera Utara</option>
      <option value="407">Kab. Sidenreng Rappang, Sulawesi Selatan</option>
      <option value="240">Kab. Sidoarjo, Jawa Timur</option>
      <option value="392">Kab. Sigi, Sulawesi Tengah</option>
      <option value="60">Kab. Sijunjung, Sumatera Barat</option>
      <option value="301">Kab. Sikka, Nusa Tenggara Timur</option>
      <option value="32">Kab. Simalungun, Sumatera Utara</option>
      <option value="1">Kab. Simeulue, Aceh</option>
      <option value="326">Kota Singkawang, Kalimantan Barat</option>
      <option value="400">Kab. Sinjai, Sulawesi Selatan</option>
      <option value="319">Kab. Sintang, Kalimantan Barat</option>
      <option value="237">Kab. Situbondo, Jawa Timur</option>
      <option value="224">Kab. Sleman, Daerah Istimewa Yogyakarta</option>
      <option value="59">Kab. Solok, Sumatera Barat</option>
      <option value="70">Kota Solok, Sumatera Barat</option>
      <option value="66">Kab. Solok Selatan, Sumatera Barat</option>
      <option value="405">Kab. Soppeng, Sulawesi Selatan</option>
      <option value="467">Kab. Sorong, Papua Barat</option>
      <option value="471">Kota Sorong, Papua Barat</option>
      <option value="466">Kab. Sorong Selatan, Papua Barat</option>
      <option value="199">Kab. Sragen, Jawa Tengah</option>
      <option value="171">Kab. Subang, Jawa Barat</option>
      <option value="23">Kota Subulussalam, Aceh</option>
      <option value="160">Kab. Sukabumi, Jawa Barat</option>
      <option value="178">Kota Sukabumi, Jawa Barat</option>
      <option value="332">Kab. Sukamara, Kalimantan Tengah</option>
      <option value="196">Kab. Sukoharjo, Jawa Tengah</option>
      <option value="291">Kab. Sumba Barat, Nusa Tenggara Timur</option>
      <option value="308">Kab. Sumba Barat Daya, Nusa Tenggara Timur</option>
      <option value="307">Kab. Sumba Tengah, Nusa Tenggara Timur</option>
      <option value="292">Kab. Sumba Timur, Nusa Tenggara Timur</option>
      <option value="284">Kab. Sumbawa, Nusa Tenggara Barat</option>
      <option value="287">Kab. Sumbawa Barat, Nusa Tenggara Barat</option>
      <option value="169">Kab. Sumedang, Jawa Barat</option>
      <option value="254">Kab. Sumenep, Jawa Timur</option>
      <option value="98">Kota Sungai Penuh, Jambi</option>
      <option value="490">Kab. Supiori, Papua</option>
      <option value="262">Kota Surabaya, Jawa Timur</option>
      <option value="216">Kota Surakarta, Jawa Tengah</option>
      <option value="349">Kab. Tabalong, Kalimantan Selatan</option>
      <option value="273">Kab. Tabanan, Bali</option>
      <option value="398">Kab. Takalar, Sulawesi Selatan</option>
      <option value="469">Kab. Tambrauw, Papua Barat</option>
      <option value="365">Kab. Tana Tidung, Kalimantan Utara</option>
      <option value="411">Kab. Tana Toraja, Sulawesi Selatan</option>
      <option value="350">Kab. Tanah Bumbu, Kalimantan Selatan</option>
      <option value="61">Kab. Tanah Datar, Sumatera Barat</option>
      <option value="341">Kab. Tanah Laut, Kalimantan Selatan</option>
      <option value="266">Kab. Tangerang, Banten</option>
      <option value="268">Kota Tangerang, Banten</option>
      <option value="271">Kota Tangerang Selatan, Banten</option>
      <option value="125">Kab. Tanggamus, Lampung</option>
      <option value="50">Kota Tanjung Balai, Sumatera Utara</option>
      <option value="94">Kab. Tanjung Jabung Barat, Jambi</option>
      <option value="93">Kab. Tanjung Jabung Timur, Jambi</option>
      <option value="152">Kota Tanjung Pinang, Kepulauan Riau</option>
      <option value="26">Kab. Tapanuli Selatan, Sumatera Utara</option>
      <option value="27">Kab. Tapanuli Tengah, Sumatera Utara</option>
      <option value="28">Kab. Tapanuli Utara, Sumatera Utara</option>
      <option value="345">Kab. Tapin, Kalimantan Selatan</option>
      <option value="367">Kota Tarakan, Kalimantan Utara</option>
      <option value="164">Kab. Tasikmalaya, Jawa Barat</option>
      <option value="184">Kota Tasikmalaya, Jawa Barat</option>
      <option value="52">Kota Tebing Tinggi, Sumatera Utara</option>
      <option value="95">Kab. Tebo, Jambi</option>
      <option value="213">Kab. Tegal, Jawa Tengah</option>
      <option value="220">Kota Tegal, Jawa Tengah</option>
      <option value="464">Kab. Teluk Bintuni, Papua Barat</option>
      <option value="463">Kab. Teluk Wondama, Papua Barat</option>
      <option value="208">Kab. Temanggung, Jawa Tengah</option>
      <option value="459">Kota Ternate, Maluku Utara</option>
      <option value="460">Kota Tidore Kepulauan, Maluku Utara</option>
      <option value="294">Kab. Timor Tengah Selatan, Nusa Tenggara Timur</option>
      <option value="295">Kab. Timor Tengah Utara, Nusa Tenggara Timur</option>
      <option value="29">Kab. Toba Samosir, Sumatera Utara</option>
      <option value="391">Kab. Tojo Una-una, Sulawesi Tengah</option>
      <option value="388">Kab. Toli-toli, Sulawesi Tengah</option>
      <option value="486">Kab. Tolikara, Papua</option>
      <option value="381">Kota Tomohon, Sulawesi Utara</option>
      <option value="414">Kab. Toraja Utara, Sulawesi Selatan</option>
      <option value="228">Kab. Trenggalek, Jawa Timur</option>
      <option value="451">Kota Tual, Maluku</option>
      <option value="248">Kab. Tuban, Jawa Timur</option>
      <option value="135">Kab. Tulang Bawang Barat, Lampung</option>
      <option value="131">Kab. Tulangbawang, Lampung</option>
      <option value="229">Kab. Tulungagung, Jawa Timur</option>
      <option value="406">Kab. Wajo, Sulawesi Selatan</option>
      <option value="424">Kab. Wakatobi, Sulawesi Tenggara</option>
      <option value="489">Kab. Waropen, Papua</option>
      <option value="130">Kab. Way Kanan, Lampung</option>
      <option value="197">Kab. Wonogiri, Jawa Tengah</option>
      <option value="192">Kab. Wonosobo, Jawa Tengah</option>
      <option value="484">Kab. Yahukimo, Papua</option>
      <option value="495">Kab. Yalimo, Papua</option>
      <option value="225">Kota Yogyakarta, Daerah Istimewa Yogyakarta</option>
    </select>
  </div>
  <div class="form-group">
    <label for class="form-label col--m4">File input</label>
    <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" name="foto_kegiatan" required autofocus>
  </div>
  <div class="form__row col">
            <label for="" class="form-label col--m4">
            Deskripsi</label>
            <div class="input-col col--m8">
                  <div class="form-info">
                        <span class="form-info--suggest">
                        Jika Campaign Anda diringkas menjadi satu tweet, apakah yang akan Anda tulis? </span>
                        <span class="form-info--counter" style="float:right;">
                        <span class="remain-char">0</span>/<span class="max-char">1080</span>
                        </span>
                  </div>
                  <textarea rows="2" maxlength="240" class="form-input form-input--block input-max-char" name="deskripsi" id="Projects_short_description" required autofocus>{{$kegiatan->deskripsi}}</textarea>
            </div>
   </div>
    <div id="termsCheckCampaigner" class="box">
        <input class="active" type="checkbox" checked required autofocus>
      <p>Saya setuju dengan <a href="#" target="_blank">Syarat & Ketentuan Campaign</a> di GalangDana.com, termasuk <a href="https://kitabisa.com/faq">biaya administrasi platform</a> sebesar 5% dari total donasi online yang terkumpul.</p>
    </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection