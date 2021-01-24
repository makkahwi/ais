<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatesemsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('sems', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->string('title');
      $table->unsignedBigInteger('year_id');
      $table->date('start')->unique();
      $table->date('join')->unique();
      $table->date('results')->unique();
      $table->boolean('resultsDone')->default(0);
      $table->date('end')->unique();
      $table->softDeletes();
      $table->timestamps();
      $table->unique( array('title','year_id'));
      $table->foreign('year_id')->references('id')->on('years')->onDelete('cascade');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('sems');
  }
}
