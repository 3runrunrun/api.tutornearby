<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserKeahlianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_keahlian', function (Blueprint $table) {
            $table->increments('id_user_keahlian');
            $table->string('id_user');
            $table->string('id_course');
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
        Schema::dropIfExists('user_keahlian');
    }
}
