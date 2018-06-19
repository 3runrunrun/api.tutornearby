<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->string('id_user');
            $table->string('nama');
            $table->string('email')->unique();
            $table->string('telp');
            $table->string('token');
            $table->string('alamat');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('gender', 1);
            $table->integer('pendidikan');
            $table->integer('tutor')->default(0);
            $table->timestamps();
            $table->integer('delete')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user');
    }
}
