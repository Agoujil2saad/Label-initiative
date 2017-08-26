<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateProjetsTable extends Migration
{
/**
* Run the migrations.
*
* @return void
*/
public function up()
{
Schema::create('projets', function (Blueprint $table) {
$table->increments('id');
$table->integer('user_id')->unsigned()->nullable();
$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
$table->string('title');
$table->string('categorie');
$table->text('description');
$table->integer('montant_estime');
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
Schema::dropIfExists('projets');
}
}