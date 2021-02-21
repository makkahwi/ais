<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentVisasTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('studentVisas', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->unsignedBigInteger('studentNo');
      $table->string('fathersPassport');
      $table->string('fathersVisas');
      $table->string('fathersLetter');
      $table->string('mothersPassport');
      $table->string('mothersVisas');
      $table->string('mothersLetter');
      $table->string('studentsPassport');
      $table->string('studentsVisas');
      $table->string('embassyLetter');
      $table->string('note')->nullable();
      $table->string('schoolLetter')->nullable();
      $table->string('additional1')->nullable();
      $table->string('additional2')->nullable();
      $table->string('additional3')->nullable();
      $table->string('status');
      $table->softDeletes();
      $table->timestamps();
      $table->foreign('studentNo')->references('studentNo')->on('students')->onDelete('cascade');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('studentVisas');
  }
}
