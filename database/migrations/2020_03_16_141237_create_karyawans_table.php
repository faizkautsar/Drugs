<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKaryawansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('karyawans', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('nama','100');
          $table->string('ttl','50');
          $table->string('email','50')->unique();
          $table->text('password');
          $table->char('no_telp',13)->unique();
          $table->text('alamat');
          $table->boolean('status')->default(true);

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
        Schema::dropIfExists('karyawans');
    }
}
