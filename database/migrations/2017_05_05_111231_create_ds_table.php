<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('ds', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('candidates_name');
            $table->string('profession');
            $table->string('years_of_experience');
            $table->integer('city_id');
 
 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
          Schema::drop('ds');
    }
}
