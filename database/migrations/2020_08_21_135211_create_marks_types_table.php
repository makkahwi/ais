<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatemarkstypesTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('markstypes', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->string('title');
      $table->unsignedBigInteger('sem_id');
      $table->unsignedBigInteger('classroom_id');
      $table->unsignedBigInteger('course_id');
      $table->unsignedBigInteger('teacher_id');
      $table->integer('max');
      $table->float('weight');
      $table->date('deadline');
      $table->boolean('used')->default(false);
      $table->softDeletes();
      $table->timestamps();
      $table->foreign('sem_id')->references('id')->on('sems')->onDelete('cascade');
      $table->foreign('classroom_id')->references('id')->on('classrooms');
      $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
      $table->foreign('teacher_id')->references('staffNo')->on('staff');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('markstypes');
  }
}
