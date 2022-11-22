<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGradepointsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gradepoints', function (Blueprint $table) {
            $table->id();
            $table->char('grade', 100)->unique();
            $table->integer('points');
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
        Schema::dropIfExists('gradepoints');
    }
}




#Query for inserting gradepoints into the table
/*
INSERT INTO `gradepoints` (`id`, `grade`, `points`, `created_at`, `updated_at`) VALUES (NULL, 'A', '12', NULL, NULL), (NULL, 'A-', '11', NULL, NULL), (NULL, 'B+', '10', NULL, NULL), (NULL, 'B', '9', NULL, NULL), (NULL, 'B-', '8', NULL, NULL), (NULL, 'C+', '7', NULL, NULL), (NULL, 'C', '6', NULL, NULL), (NULL, 'C-', '5', NULL, NULL), (NULL, 'D+', '4', NULL, NULL), (NULL, 'D', '3', NULL, NULL), (NULL, 'D-', '2', NULL, NULL), (NULL, 'E', '1', NULL, NULL);
 */