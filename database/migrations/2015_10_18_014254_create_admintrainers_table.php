<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdmintrainersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admintrainers', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
             $table->string('slug')->nullable();
            $table->tinyInteger('status')->default(1);

            $table->string('name', 30);
            $table->string('email', 30);
            $table->string('country', 10);
            $table->string('gender', 10);
            $table->string('educational_qualification', 100);
           
            $table->string('skill_set', 50);
            $table->string('previous_experience', 100);
            $table->date('date_of_birth', 30);
            $table->string('cell_number', 15);
            $table->string('filePath');

            $table->integer('course_id')->unsigned();
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
            

            $table->integer('trainer_id')->unsigned();
            $table->foreign('trainer_id')->references('id')->on('users')->onDelete('cascade');           
        });
    }
        
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('admintrainers');
    }
}
