<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassroomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classrooms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->unsignedBigInteger('level_id');
            $table->integer('roomNo');
            $table->integer('capacity');
            $table->text('description');
            $table->unsignedBigInteger('supervisor_id');
            $table->unsignedBigInteger('status_id')->default(2);
            $table->softDeletes();
            $table->timestamps();
            $table->unique( array('title','level_id'));
            $table->foreign('level_id')->references('id')->on('levels')->onDelete('cascade');
            $table->foreign('supervisor_id')->references('staffNo')->on('staff');
            $table->foreign('status_id')->references('id')->on('statuses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('classrooms');
    }
}
