<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
     // Create table for associating document to Cities (Many-to-Many)
        Schema::create('document_cities', function (Blueprint $table) {
            $table->integer('document_id')->unsigned();
            $table->integer('city_id')->unsigned();

            $table->foreign('document_id')->references('id')->on('documents')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('city_id')->references('id')->on('cities')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->primary(['document_id', 'city_id']);
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::drop('document_cities');
    }
}
