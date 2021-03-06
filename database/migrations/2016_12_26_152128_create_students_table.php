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
            $table->increments('id');
            $table->string('code')->unique(); //MaSV
            $table->string('name')->nullable(); //clsName
            $table->date('date')->nullable();
            $table->timestamps();

            /*Foreign key*/
            $table->integer('clazz_id')->unsigned()->index();
            $table->foreign('clazz_id')->references('id')->on('clazzs')->onUpdate('cascade')->onDelete('cascade');

            $table->integer('user_id')->unsigned()->index()->nullable();
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
