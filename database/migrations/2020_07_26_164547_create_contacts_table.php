<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('contacts', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->unsignedBigInteger('schoolNo')->unique();
      $table->date('dob');
      $table->string('gender');
      $table->string('email')->nullable();
      $table->string('phone')->nullable();
      $table->text('address');
      $table->unsignedBigInteger('relative_id')->nullable();
      $table->string('relation');
      $table->string('nation');
      $table->string('ppno');
      $table->date('ppExpiry');
      $table->date('visaExpiry');
      $table->string('photo')->nullable();
      $table->string('passport')->nullable();
      $table->string('visa')->nullable();
      $table->string('doc1')->nullable();
      $table->string('doc2')->nullable();
      $table->string('doc3')->nullable();
      $table->softDeletes();
      $table->timestamps();
      $table->foreign('schoolNo')->references('schoolNo')->on('users')->onDelete('cascade');
      $table->foreign('relative_id')->references('id')->on('relatives')->onDelete('cascade');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('contacts');
  }
}
