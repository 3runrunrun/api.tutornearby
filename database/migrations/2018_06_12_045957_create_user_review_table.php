<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserReviewTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_review', function (Blueprint $table) {
            $table->string('id_review');
            $table->string('id_sender');
            $table->string('id_receiver');
            $table->integer('isreceivertutor')->default();
            $table->float('rating', 2, 1);
            $table->string('title');
            $table->string('message');
            $table->dateTime('time');
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
        Schema::dropIfExists('user_review');
    }
}
