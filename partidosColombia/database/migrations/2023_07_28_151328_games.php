<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('games', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('game_date', 50);
            $table->bigInteger('local_team')->unsigned();
            $table->bigInteger('visiting_team')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->string('home_goals');
            $table->string('visiting_goals');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('local_team')->references('id')->on('teams');
            $table->foreign('visiting_team')->references('id')->on('teams');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('games');
    }
};
