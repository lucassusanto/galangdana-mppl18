<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKegiatansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kegiatans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_user')->unsigned();
            $table->foreign('id_user')
                ->references('id')->on('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('nama_kegiatan');
            $table->date('deadline');
            $table->integer('uang_terkumpul');
            $table->integer('uang_target');
            $table->longtext('deskripsi');
            $table->binary('foto_kegiatan');
            $table->integer('status_kegiatans');
            $table->timestamps();
        });

        DB::statement("ALTER TABLE kegiatans MODIFY COLUMN foto_kegiatan LONGBLOB");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kegiatans');
    }
}
