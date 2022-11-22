<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subjects', function (Blueprint $table) {
            $table->id();
            $table->string('subject')->unique();
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
        Schema::dropIfExists('subjects');
    }
}

#Query for inserting subjects into the table
/* 

INSERT INTO `subjects` (`id`, `subject`, `created_at`, `updated_at`) VALUES (NULL, 'Mathematics', NULL, NULL), (NULL, 'English', NULL, NULL), (NULL, 'Kiswahili', NULL, NULL), (NULL, 'Biology', NULL, NULL), (NULL, 'Chemistry', NULL, NULL), (NULL, 'Physics', NULL, NULL), (NULL, 'Geography', NULL, NULL), (NULL, 'History', NULL, NULL), (NULL, 'Computer Studies', NULL, NULL), (NULL, 'French', NULL, NULL), (NULL, 'Home Science', NULL, NULL), (NULL, 'German', NULL, NULL), (NULL, 'Music', NULL, NULL), (NULL, 'Business Studies', NULL, NULL), (NULL, 'Agriculture', NULL, NULL), (NULL, 'Art and Design', NULL, NULL), (NULL, 'Aviation', NULL, NULL), (NULL, 'Electricity', NULL, NULL), (NULL, 'Religious Education', NULL, NULL), (NULL, 'Woodwork', NULL, NULL), (NULL, 'Power Mechanics', NULL, NULL), (NULL, 'Arabic', NULL, NULL); 

*/