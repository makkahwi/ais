<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelativesTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('relatives', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->string('eName');
      $table->string('aName');
      $table->string('name');
      $table->string('gender');
      $table->string('job');
      $table->string('org')->nullable();
      $table->string('email');
      $table->string('phone');
      $table->text('hAddress');
      $table->text('wAddress')->nullable();
      $table->text('more')->nullable();
      $table->string('nation')->nullable();
      $table->string('ppno')->nullable();
      $table->date('ppExpiry')->nullable();
      $table->date('visaExpiry')->nullable();
      $table->string('passport')->nullable();
      $table->string('visa')->nullable();
      $table->softDeletes();
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
    Schema::dropIfExists('relatives');
  }
}
