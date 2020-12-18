<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studentspayments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('sem_id');
            $table->date('date');
            $table->unsignedBigInteger('studentNo');
            $table->float('amount');
            $table->string('method');
            $table->string('receipt')->nullable();
            $table->string('receiptNo')->nullable();
            $table->string('note')->nullable();
            $table->softDeletes();
            $table->timestamps();
            $table->foreign('sem_id')->references('id')->on('sems')->onDelete('cascade');
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
        Schema::dropIfExists('studentspayments');
    }
}
