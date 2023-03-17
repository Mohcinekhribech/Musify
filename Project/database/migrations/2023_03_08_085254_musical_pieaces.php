<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MusicalPieaces extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('musical_pieces', function (Blueprint $table) {
            $table->id();
            $table->string('CoverImage')->nullable();
            $table->date('Release_date')->nullable();
            $table->float('duration')->nullable();
            $table->boolean('fav')->nullable();
            $table->integer('archive')->default(0);
            $table->string('title')->nullable();
            $table->foreignId('artiste')->references('id')->on('artists')->onDelete('cascade');
            $table->string('group')->nullable();
            $table->string('writer')->nullable();
            $table->string('langue')->nullable();
            $table->string('lyrics')->nullable();
            $table->string('Music')->nullable();
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
        //
    }
}
