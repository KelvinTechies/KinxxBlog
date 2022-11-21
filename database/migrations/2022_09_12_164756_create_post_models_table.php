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
        Schema::create('post_models', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Admin_id');
            $table->longText('Content');
            $table->string('Images');
            $table->string('Author');
            $table->string('Title');
            $table->longText('Description');
            $table->timestamps();
            $table->foreign('Admin_id')->references('id')->on('admin_models')->onDelete('cascade');
            // $table->index("Admin_id");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post_models');
    }
};
