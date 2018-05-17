<?php

use Illuminate\Database\Seeder;
use App\transaksi;
class TransaksiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
      $transaksi = new transaksi();
      $transaksi->id_user = 7;
      $transaksi->id_kegiatan = 2;
      $transaksi->jumlah_donasi = 1000000;
      $transaksi->bukti_trf = null;
      $transaksi->status_transaksis = 1;
      $transaksi->save();

      $transaksi = new transaksi();
      $transaksi->id_user = 7;
      $transaksi->id_kegiatan = 2;
      $transaksi->jumlah_donasi = 1500000;
      $transaksi->bukti_trf = null;
      $transaksi->status_transaksis = 1;
      $transaksi->save();

    }
}
