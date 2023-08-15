<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactMassagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_massages', function (Blueprint $table) {
            $table->id();
            $table->longText('name')->nullable();
            $table->longText('email')->nullable();
            $table->longText('subject')->nullable();
            $table->longText('message')->nullable();
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
        Schema::dropIfExists('contact_massages');
    }
}
