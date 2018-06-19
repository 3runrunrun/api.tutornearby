<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event', function (Blueprint $table) {
            $table->string('id_event');
            $table->string('nama');
            $table->string('id_user');
            $table->timestamp('waktu_awal');
            $table->timestamp('waktu_akhir');
            $table->string('alamat');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('deskripsi');
            $table->integer('public')->default(0);
            $table->integer('aktif');
            $table->integer('dibatalkan')->default(0);
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
        Schema::dropIfExists('event');
    }
}
