<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUniversityCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('university_courses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('course_id')->constrained()->onUpdate('cascade')
            ->onDelete('cascade');
            $table->string('program_code');
            $table->string('institution_name');
            $table->string('programme_name');
            $table->string('2015')->nullable();
            $table->string('2016')->nullable();
            $table->string('2017')->nullable();
            $table->string('2018')->nullable();
            $table->string('2019')->nullable();
            $table->string('2020')->nullable();
            $table->string('2021')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('university_courses');
    }
}
