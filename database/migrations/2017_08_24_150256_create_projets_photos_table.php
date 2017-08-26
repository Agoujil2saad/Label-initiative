<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjetsPhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
public function up()
    {
        Schema::create('projets_photos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('projet_id')->unsigned();
            $table->foreign('projet_id')->references('id')->on('projets')->onDelete('cascade');
            $table->string('filename');
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
        Schema::dropIfExists('projets_photos');
    }
}
