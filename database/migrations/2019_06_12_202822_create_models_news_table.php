<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelsNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('models_news', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('name')->unique();
            $table->string('urls');
            $table->text('textsmall');
            $table->text('textfull');
            $table->text('fotonew');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('tagnews_id');
            $table->dateTime('datapublic');
            $table->boolean('public');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('tagnews_id')->references('id')->on('models_tagnews')
                ->onUpdate('cascade')->onDelete('cascade');
           // $table->foreign('tagnews_id')->references('id')->on('models_tagnews');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('models_news');
    }
}
