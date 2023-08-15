<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBrancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('brances', function (Blueprint $table) {
       $table->id();
       $table->string('name')->nullable();
       $table->string('phone')->nullable();
       $table->string('email')->nullable();
       $table->string('address')->nullable();
       $table->string('holiday')->nullable();
       $table->string('opening_time')->nullable();
       $table->string('ending_time')->nullable();
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
        Schema::dropIfExists('brances');
    }
}
