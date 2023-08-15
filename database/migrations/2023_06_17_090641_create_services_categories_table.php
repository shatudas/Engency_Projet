<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
     Schema::create('services_categories', function (Blueprint $table) {
      $table->id();
      $table->string('name')->nullable();
      $table->string('title')->nullable();
      $table->string('image')->nullable();
      $table->string('status')->nullable();
      $table->integer('created_by')->nullable();
      $table->integer('updated_by')->nullable();
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
        Schema::dropIfExists('services_categories');
    }
}
