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
        Schema::create('ads', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->integer('price');
            $table->integer('city_id');
            $table->integer('category_id');
            $table->integer('sub_category_id');
            $table->string('feature1');
            $table->string('feature2');
            $table->string('feature3');
            $table->string('feature4');
            $table->string('feature5');
            $table->string('feature6');
            $table->integer('user_id');
            $table->integer('slug');
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
        Schema::dropIfExists('ads');
    }
};
