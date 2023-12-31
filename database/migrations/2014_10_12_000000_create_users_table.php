<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('jenisKelamin')->nullable();
            $table->string('nik')->nullable();
            $table->string('usia')->nullable();
            $table->string('pekerjaan')->nullable();
            $table->string('pendidikanTerakhir')->nullable();
            $table->string('noHp')->nullable();
            $table->string('role')->default('pemohon');
            $table->text('alamat')->nullable();
            $table->text('profile')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
