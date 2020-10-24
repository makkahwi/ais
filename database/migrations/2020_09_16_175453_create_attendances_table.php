<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttendancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendances', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('sem_id');
            $table->unsignedBigInteger('schoolNo');
            $table->date('date');
            $table->integer('attendance');
            $table->text('note')->nullable();
            $table->softDeletes();
            $table->timestamps();
            $table->foreign('sem_id')->references('id')->on('sems')->onDelete('cascade');
            $table->foreign('schoolNo')->references('schoolNo')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attendances');
    }
}
