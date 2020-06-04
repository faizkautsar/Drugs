<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePsikotropikasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('psikotropikas', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('nama','100');
            $table->string('golongan','50');
            $table->text('dampak');
            $table->text('keterangan');
            $table->text('gambar');
            $table->enum('status',['1', '0'])->default('1');
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
        Schema::dropIfExists('psikotropikas');
    }
}
