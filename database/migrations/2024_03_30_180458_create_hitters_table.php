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
        Schema::create('hitters', function (Blueprint $table) {
            $table->string('name');
            $table->string('team');
            $table->integer('games');
            $table->integer('pa');
            $table->integer('atbats');
            $table->integer('hits');
            $table->integer('doubles');
            $table->integer('triples');
            $table->integer('homeruns');
            $table->float('runs');
            $table->float('rbi');
            $table->float('bb');
            $table->float('strikeouts');
            $table->float('hbp');
            $table->float('sb');
            $table->float('cs');
            $table->float('avg');
            $table->float('obp');
            $table->float('slg');
            $table->float('ops');
            $table->float('wOBA');
            $table->float('wRCplus');
            $table->float('BsR');
            $table->float('fld');
            $table->float('off');
            $table->float('def');
            $table->float('war');
            $table->float('adp');
            $table->id('id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hitters');
    }
};
