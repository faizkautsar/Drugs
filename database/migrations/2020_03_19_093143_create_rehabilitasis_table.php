<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRehabilitasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rehabilitasis', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('inisial','6');
            $table->string('nama_lengkap','50')
            $table->date('tanggal_lahir');
            $table->text('alamat')->nullable();
            $table->text('keterangan')->nullable();
            $table->string('pekerjaan','20')->nullable();
            $table->string('rujukan','150');
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
        Schema::dropIfExists('rehabilitasis');
    }
}
