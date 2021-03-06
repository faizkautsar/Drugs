<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBhnAdiktifsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bhn_adiktifs', function (Blueprint $table) {
            $table->Increments('id');
            $table->bigInteger('id_karyawan')->unsigned();
            $table->string('nama', '100');
            $table->text('dampak');
            $table->text('keterangan');
            $table->text('gambar');
            $table->enum('status',['1', '0'])->default('1');
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
        Schema::dropIfExists('bhn_adiktifs');
    }
}
