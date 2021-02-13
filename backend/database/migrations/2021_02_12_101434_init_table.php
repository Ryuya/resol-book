<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //悩み作成
        Schema::create('problems', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->timestamps();
        });

        //AnswerModel
        Schema::create('answers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('problem_id')->unsigned();
            $table->foreign('problem_id')->references('id')->on('problems');
            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->string('url', 3000)->nullable();
            $table->timestamps();
        });

        //悩み作成
        // Schema::create('answer_urls', function (Blueprint $table) {
        //     $table->bigIncrements('id');
        //     $table->bigInteger('answer_id')->unsigned();
        //     $table->foreign('answer_id')->references('id')->on('answers');
        //     $table->string('url', )->nullable();
        //     $table->timestamps();
        // });
    }
}
