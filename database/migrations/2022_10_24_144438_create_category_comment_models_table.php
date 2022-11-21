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
        Schema::create('category_comment_models', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Cat_id');       
            $table->longText('Comments');
            $table->string('Image')->nullable();
            $table->string('UnKnown');
            $table->foreign('Cat_id')->references('id')->on('categories_models')->onDelete('Cascade');
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
        Schema::dropIfExists('category_comment_models');
    }
};
