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

            $table->String('skpd/desa');
            $table->text('langkahlangkah');
            $table->text('uraian');
            $table->text('harapan');
            $table->text('tanggapan');
            $table->text('ktp');
            $table->text('permohonan');
            $table->string('jabatan');
            $table->text('jenis_perkara');
            $table->text('skk');
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
