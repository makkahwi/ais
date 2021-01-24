<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('exams', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->unsignedBigInteger('sem_id');
      $table->unsignedBigInteger('course_id');
      $table->string('title');
      $table->date('date');
      $table->text('note')->nullable();
      $table->softDeletes();
      $table->timestamps();
      $table->unique( array('sem_id','course_id','title'));
      $table->foreign('sem_id')->references('id')->on('sems')->onDelete('cascade');
      $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('exams');
  }
}
