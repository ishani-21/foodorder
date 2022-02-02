<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foods', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('restaurants_id');
            $table->foreign('restaurants_id')->references('id')->on('restaurants')->onDelete('cascade');
            $table->unsignedBigInteger('categorys_id');
            $table->foreign('categorys_id')->references('id')->on('categorys')->onDelete('cascade');
            $table->unsignedBigInteger('subcategorys_id');
            $table->foreign('subcategorys_id')->references('id')->on('subcategorys')->onDelete('cascade');;
            $table->string('name');
            $table->string('price');
            $table->longtext('discription');
            $table->string('image');
            $table->string('slug');
            $table->string('status');
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
        Schema::dropIfExists('foods');
    }
}

