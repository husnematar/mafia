<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->foreignId('room_id');
            $table->integer('total_size');
            $table->integer('min_player')->default(4);
            $table->integer('mafias')->default(1);
            $table->integer('doctors')->default(0);
            $table->integer('sheriffs')->default(0);
            $table->integer('civilians')->default(3);
            $table->integer('night_time')->default(5*60);
            $table->integer('day_time')->default(12*60);
            $table->integer('discussion_vote_time')->default(60);
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
        Schema::dropIfExists('games');
    }
}
