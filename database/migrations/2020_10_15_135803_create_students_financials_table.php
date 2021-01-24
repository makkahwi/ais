<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsFinancialsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('studentsFinancials', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->unsignedBigInteger('sem_id');
      $table->unsignedBigInteger('studentNo');
      $table->unsignedBigInteger('category_id');
      $table->unsignedBigInteger('discount_id');
      $table->float('finalAmount');
      $table->softDeletes();
      $table->timestamps();
      $table->foreign('sem_id')->references('id')->on('sems')->onDelete('cascade');
      $table->foreign('studentNo')->references('studentNo')->on('students')->onDelete('cascade');
      $table->foreign('category_id')->references('id')->on('studentsFinancialsCategories');
      $table->foreign('discount_id')->references('id')->on('studentsFinancialsDiscounts');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('studentsFinancials');
  }
}
