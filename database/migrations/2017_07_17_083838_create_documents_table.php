<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('candidates_name');
            $table->string('profession');
            $table->string('years_of_experience');
            $table->integer('city_id');
            $table->string('cv_file')->default('default.png');;
            $table->timestamps();

            //
        });

        Schema::create('city', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('display_name');
            $table->timestamps();

 
        });

        Schema::create('region', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('display_name');
            $table->timestamps();
 
        });

          // Create table for associating cities to Region (Many-to-Many)
        Schema::create('region_city', function (Blueprint $table) {
            $table->integer('region_id')->unsigned();
            $table->integer('city_id')->unsigned();

            $table->foreign('region_id')->references('id')->on('regions')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('city_id')->references('id')->on('cities')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->primary(['region_id', 'city_id']);
        });


        Schema::create('professions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('display_name');
            $table->string('discription');
            $table->timestamps();

        });

        // Create table for associating document to Profession (Many-to-Many)
        Schema::create('document_profession', function (Blueprint $table) {
            $table->integer('document_id')->unsigned();
            $table->integer('profession_id')->unsigned();

            $table->foreign('document_id')->references('id')->on('documents')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('profession_id')->references('id')->on('professions')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->primary(['document_id', 'profession_id']);
        });
        
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('documents');
        Schema::drop('region');
        Schema::drop('city');
        Schema::drop('discription');
    }
}
