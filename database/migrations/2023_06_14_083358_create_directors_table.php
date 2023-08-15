<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDirectorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('directors', function (Blueprint $table) {
            $table->id();
             $table->string('name')->nullable();
             $table->string('designations')->nullable();
             $table->integer('status')->nullable();
             $table->string('image')->nullable();
             $table->string('facebook')->nullable();
             $table->string('linkdin')->nullable();
             $table->string('created_by')->nullable();
             $table->string('updated_by')->nullable();
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
        Schema::dropIfExists('directors');
    }
}
