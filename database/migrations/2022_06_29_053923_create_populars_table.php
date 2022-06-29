<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('populars', function (Blueprint $table) {
            $table->id();
            $table->string('poster_path')->nullable();
            $table->boolean('adult');
            $table->string('overview');
            $table->string('relase_date');
            $table->json('genres_id');
            $table->string('title');
            $table->string('backdrop_path')->nullable();
            $table->integer('populartity');
            $table->integer('vote_count');
            $table->boolean('video');
            $table->integer('vote_avarage');
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
        Schema::dropIfExists('populars');
    }
};
