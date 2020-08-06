<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama','100');
            $table->string('email',50)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->text('password');
            $table->char('no_telp',13)->unique();
            $table->string('jalan','100');
            $table->string('desa','25');
            $table->string('kecamatan','25');
            $table->string('kota','25');
            $table->text('foto')->nullable();
            $table->text('fcm_token')->nullable();
            $table->text('api_token');
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
        Schema::dropIfExists('users');
    }
}
