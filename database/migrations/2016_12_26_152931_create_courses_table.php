<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code')->unique(); //crdCode
            $table->string('name'); //crdName
            $table->integer('credit')->nullable(); // số tín chỉ
            $table->timestamps();

            /*Foreign keys*/
            $table->integer('term_id')->unsigned()->index();
            $table->string('link_origin')->nullable();
            $table->string('link_remote')->nullable();
            $table->foreign('term_id')->references('id')->on('terms')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
