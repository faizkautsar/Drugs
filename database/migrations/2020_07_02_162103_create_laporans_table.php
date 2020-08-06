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
            $table->string('peran','20');
            $table->text('foto');
            $table->string('nama','50');
            $table->char('no_telp',13)->unique();
            $table->text('alamat');
            $table->string('jenis_narkoba','50');
            $table->string('pekerjaan','50');
            $table->string('kendaraan','100')->nulllabel();
            $table->string('kegiatan','100');
            $table->string('tmpt_transaksi',100);
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
