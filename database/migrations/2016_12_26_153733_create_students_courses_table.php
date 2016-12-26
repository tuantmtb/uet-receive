<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students_courses', function (Blueprint $table) {
            $table->increments('id')->unique()->index()->unsigned();
            $table->string('student_id')->index();
            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
            $table->string('course_id')->unsignedindex();
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('students_courses');
    }
}
