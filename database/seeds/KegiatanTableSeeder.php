<?php

use Illuminate\Database\Seeder;
use App\kegiatan;
use Carbon\Carbon;
class KegiatanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
      $kegiatan = new kegiatan();
      $kegiatan->id_user = 5;
      $kegiatan->nama_kegiatan = 'Kebutuhan Panti Asuhan Z';
      $kegiatan->deadline = Carbon::now()->modify('+10 day')->format('Y-m-d');
      $kegiatan->uang_terkumpul = 0;
      $kegiatan->uang_target = 1000000;
      $kegiatan->deskripsi = 'Buat Beli Kebutuhan anak panti';
      $kegiatan->foto_kegiatan = null;
      $kegiatan->status_kegiatans = 0;
      $kegiatan->save();

      $kegiatan = new kegiatan();
      $kegiatan->id_user = 5;
      $kegiatan->nama_kegiatan = 'Kebutuhan Panti Asuhan XYZ';
      $kegiatan->deadline = Carbon::now()->modify('+10 day')->format('Y-m-d');
      $kegiatan->uang_terkumpul = 2500000;
      $kegiatan->uang_target = 5000000;
      $kegiatan->deskripsi = 'Buat Beli Kebutuhan anak panti';
      $kegiatan->foto_kegiatan = null;
      $kegiatan->status_kegiatans = 1;
      $kegiatan->save();
    }
}
