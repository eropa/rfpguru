<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFotoBodiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foto_bodies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('foto_albomid');
            $table->string('name');
            $table->text('fotourl');
            $table->foreign('foto_albomid')->references('id')->on('foto_heads')
                ->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('foto_bodies');
    }
}
