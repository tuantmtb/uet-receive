<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->string('id')->primary();; //stdId
            $table->string('code')->unique(); //MaSV
            $table->string('name'); //clsName
            $table->date('date');
            $table->timestamps();

            /*Foreign key*/
            $table->string('clazz_id')->index();
            $table->foreign('clazz_id')->references('id')->on('clazzs')->onUpdate('cascade')->onDelete('cascade');

            $table->integer('user_id')->unsigned()->index();
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
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
