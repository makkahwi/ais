<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('studentNo')->unique();
            $table->string('eName');
            $table->string('aName');
            $table->unsignedBigInteger('classroom_id');
            $table->string('sponsor');
            $table->string('tuitiondiscounts');
            $table->integer('tuitionfreq')->default(1);
            $table->boolean('financial')->default(false);
            $table->boolean('trans');
            $table->softDeletes();
            $table->timestamps();
            $table->foreign('studentNo')->references('schoolNo')->on('users')->onDelete('cascade');
            $table->foreign('classroom_id')->references('id')->on('classrooms');
            $table->foreign('visa_id')->references('id')->on('visas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
