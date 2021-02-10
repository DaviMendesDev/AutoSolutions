<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AutoParts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auto_parts', function (Blueprint $table) {
            $table->id();
            $table->string('part_name');
            $table->unsignedBigInteger('auto_model_id');
            $table->foreign('auto_model_id')->references('id')->on('auto_models');
            $table->float('price');
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
        Schema::dropIfExists('auto_parts');
    }
}
