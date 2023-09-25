<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBantuansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bantuan', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('tempat');
            $table->date('tanggal');
            $table->string('nomor');
            $table->string('nama_organisasi');
            $table->string('nama_pemohon');
            $table->string('tanggal_lahir_pemohon');
            $table->string('jenis_kelamin_pemohon');
            $table->string('agama_pemohon');
            $table->string('pendidikan_pemohon');
            $table->string('golongan_darah_pemohon');
            $table->string('alamat_pemohon');
            $table->string('pekerjaan_pemohon');
            $table->string('keteranganmiskin_pemohon');
            $table->string('keterangan_1');
            $table->text('ttd_pemohon');
            // hasil konsultasi hukum
            $table->string('status_pemohon');
            $table->string('kelurahan');
            $table->string('kecamatan');
            $table->string('kabupaten');
            $table->date('pelaksanaan');
            $table->text('uraian');
            $table->text('nasihat');
            $table->text('hasilkonsultasi');
            $table->text('kesanKonsultasi');
            $table->text('nama_konsultanhukum');
            $table->text('ttd_konsultanhukum');
            $table->string('tempat_bantuanhukum');
            $table->string('tanggal_bantuanhukum');
            $table->text('ttd_pemberibantuanhukum');
            // laporan pelaksanaan Kegiatan mediasi
            $table->string('hari_mediasi');
            $table->string('tanggal_mediasi');
            $table->string('bulan_mediasi');
            $table->string('tahun_mediasi');
            $table->string('dilaksanakan_mediasi');
            $table->string('alamat_mediasi');
            $table->string('pihak1_mediasi');
            $table->string('pihak1_alamat');
            $table->string('pihak1_perkara');
            $table->text('hasil_mediasi');
            $table->text('ttd_pihak1');
            $table->String('namattd_pihak1');
            $table->text('ttd_pihak2');
            $table->String('namattd_pihak2');
            $table->text('ttd_mediator');
            $table->String('namattd_mediator');
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
        Schema::dropIfExists('bantuan');
    }
}
