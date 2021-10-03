<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_categories', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->autoIncrement()->default(null);
            $table->unsignedBigInteger('service_category_id')->nullable();
            $table->foreign('service_category_id')->references('id')->on('service_categories')->onDelete('cascade');

            $table->string('image')->nullable();
            $table->string('title')->nullable();
            $table->text('contact')->nullable();
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
        Schema::dropIfExists('sub_categories');
    }
}
