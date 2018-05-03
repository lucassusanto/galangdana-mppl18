<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_user')->unsigned()->nullable;
            $table->integer('id_kegiatan')->unsigned();
            $table->integer('jumlah_donasi');
            $table->binary('bukti_trf');
            $table->String('status_transaksis')->default(0);
            $table->timestamps();
        });

        DB::statement("ALTER TABLE transaksis MODIFY COLUMN bukti_trf LONGBLOB");

        Schema::table('transaksis', function($table){
            $table->foreign('id_user')
                ->references('id')->on('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('id_kegiatan')
                ->references('id')->on('kegiatans')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksis');
    }
}
