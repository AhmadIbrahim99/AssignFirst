<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('office_code');
            $table->integer('reportsTo');
            $table->string('LastName');
            $table->string('FirstName');
            $table->string('Extension');
            $table->string('Email');
            $table->string('JobTitle',100);

            $table->timestamps();

             $table->foreign('office_code')->references('code')->on('offices');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
