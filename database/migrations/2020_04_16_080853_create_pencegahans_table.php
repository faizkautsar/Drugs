<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePencegahansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pencegahans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_karyawan')->unsigned();
            $table->string('aspek','150');
            $table->text('keterangan');
            $table->timestamps();
            
            $table->foreign('id_karyawan')->references('id')->on('karyawans')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pencegahans');
    }
}
