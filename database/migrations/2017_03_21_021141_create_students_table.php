<?php

use Illuminate\Support\Facades\Schema;
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
            $table->string('name');
            $table->integer('student_id')->unique();
            $table->string('section_name'); 
            $table->integer('grade_level'); 
            $table->float('english', 5, 2);
            $table->float('math', 5, 2);
            $table->float('filipino',5, 2);
            $table->float('science', 5, 2);
            $table->float('mapeh', 5, 2);
            $table->float('epp', 5, 2);
            $table->float('cl', 5, 2);
            $table->integer('teacher_id');
            $table->timestamps();
            $table->softDeletes();
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
