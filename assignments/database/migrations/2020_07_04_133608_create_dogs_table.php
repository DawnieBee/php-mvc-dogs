<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dogs', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->integer('age');
            $table->string('image', 255);
            $table->string('sex', 255);
            $table->string('breed', 255);
            $table->string('size', 255);
            $table->enum('intact', ['yes', 'no'])->default('no');
            $table->text('abstract');
            $table->longtext('description');
            $table->integer('category_id')->default(1);
            $table->softDeletes();
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
        Schema::dropIfExists('dogs');
    }
}
