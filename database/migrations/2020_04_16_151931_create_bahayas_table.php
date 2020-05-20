<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBahayasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bahayas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tubuh','15');
            $table->string('keterangan', '150');
            $table->text('bahaya');
            $table->string('gambar','191');
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
        Schema::dropIfExists('bahayas');
    }
}
