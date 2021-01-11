<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilmTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('film', function (Blueprint $table) {
            $table->id('film_id');
            $table->string('title'); 
            $table->text('description')->nullable();
            $table->string('release_year')->nullable();
            $table->unsignedBigInteger('language_id');
            $table->foreign('language_id')->references('language_id')->on('language');
            $table->unsignedBigInteger('original_language_id')->nullable();
            $table->foreign('original_language_id')->references('language_id')->on('language');
            $table->integer('rental_duration');
            $table->float('rental_rate',4,2);
            $table->integer('length')->nullable();
            $table->float('replacement_cost',5,2);
            $table->string('rating',10)->nullable(); 
            $table->string('special_features',100)->nullable(); 
            $table->timestamp('last_update');
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
        Schema::dropIfExists('film');
    }
}
