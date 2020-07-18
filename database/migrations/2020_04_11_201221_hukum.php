<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Hukum extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('hukums', function (Blueprint $table) {
          $table->Increments('id');
          $table->bigInteger('id_karyawan')->unsigned();
          $table->text('keterangan');
          $table->text('isi');
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
        //
    }
}
