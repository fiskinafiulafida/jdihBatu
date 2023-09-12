<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBantuanhukumTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bantuanhukum', function (Blueprint $table) {
            $table->id();
            $table->String('skpd/desa')->nullable();
            $table->text('langkahlangkah')->nullable();
            $table->text('uraian')->nullable();
            $table->text('harapan')->nullable();
            $table->text('tanggapan')->nullable();
            $table->text('ktp')->nullable();
            $table->text('permohonan')->nullable();
            $table->string('jabatan')->nullable();
            $table->text('jenis_perkara')->nullable();
            $table->text('skk')->nullable();

            // untuk foreign key dengan tabel user
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->on('users')->references('id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bantuanhukum');
    }
}
