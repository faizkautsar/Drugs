<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLaporansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('peran');
            $table->text('foto');
            $table->string('nama');
            $table->char('no_telp');
            $table->text('alamat');
            $table->string('jenis_narkoba');
            $table->string('pekerjaan');
            $table->string('kendaraan')->nulllabel();
            $table->string('kegiatan');
            $table->string('tmpt_transaksi');
            $table->boolean('status')->default(false);
            $table->bigInteger('id_user')->unsigned();
            $table->timestamps();
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('laporans');
    }
}
