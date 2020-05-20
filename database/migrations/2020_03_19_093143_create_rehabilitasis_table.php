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
            $table->string('nama','50');
            $table->char('umur','3');
            $table->text('alamat')->nullable();
            $table->text('keterangan')->nullable();
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
