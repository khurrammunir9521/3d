<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Migrations\Migration;

class CreateImageSlidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('image_sliders', function (Blueprint $table) {
            $table->id();
            $table->integer('speed')->nullable();
            $table->integer('number')->nullable();
            $table->string('images');
            $table->string('images2');
            $table->string('images3');
            $table->string('images4');
            $table->string('heading');
            $table->string('heading2');
            $table->string('heading3');
            $table->string('heading4');

            $table->string('sub_heading');
            $table->string('sub_heading2');
            $table->string('sub_heading3');
            $table->string('sub_heading4');
            $table->longText('body_text');
            $table->string('body_text2');
            $table->string('body_text3');
            $table->string('body_text4');
            $table->timestamps();
            $table->SoftDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('image_sliders');
    }
}
