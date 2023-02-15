<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMusicalPieceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('musical_piece', function (Blueprint $table) {
            $table->id();
            $table->string('CoverImage');
            $table->date('Release_date');
            $table->float('duration');
            $table->boolean('fav');
            $table->string('title');
            $table->string('artiste');
            $table->string('group');
            $table->string('writer');
            $table->string('langue');
            $table->string('lyrics');
            $table->string('Music');
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
        Schema::dropIfExists('_musical_piece');
    }
}
