<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->date('tanggal_lahir');
            $table->string('alamat');
            $table->string('tipe_user');
            $table->binary('foto_user')->nullable();
            $table->binary('ktp')->nullable();
            $table->binary('foto_verifikasi')->nullable();
            $table->string('nomor_hp')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

        DB::statement("ALTER TABLE users MODIFY COLUMN foto_user LONGBLOB");
        DB::statement("ALTER TABLE users MODIFY COLUMN ktp LONGBLOB");
        DB::statement("ALTER TABLE users MODIFY COLUMN foto_verifikasi LONGBLOB");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
