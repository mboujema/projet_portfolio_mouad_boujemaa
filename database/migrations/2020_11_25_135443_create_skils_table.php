<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skils', function (Blueprint $table) {
            $table->id();
            $table->string("lang1");
            $table->integer("pourcent1");
            $table->string("lang2");
            $table->integer("pourcent2");
            $table->string("lang3");
            $table->integer("pourcent3");
            $table->string("lang4");
            $table->integer("pourcent4");
            $table->string("lang5");
            $table->integer("pourcent5");
            $table->string("lang6");
            $table->integer("pourcent6");
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
        Schema::dropIfExists('skils');
    }
}
