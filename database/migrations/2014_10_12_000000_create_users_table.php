<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('provider_id')->nullable();
            $table->integer('role');
            $table->text('verification_code')->nullable();
            $table->text('new_email_verification_code')->nullable(); 
            $table->string('avatar')->nullable();
            $table->string('avatar_original')->nullable();
            $table->string('address');
            $table->integer('id_provinsi');
            $table->integer('id_kota');
            $table->integer('id_kecamatan');
            $table->integer('id_kelurahan');
            $table->string('postal_code');
            $table->string('phone');
            $table->decimal('balance')->nullable();
            $table->tinyInteger('banned')->nullable();
            $table->string('referral_code');
            $table->rememberToken();
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
