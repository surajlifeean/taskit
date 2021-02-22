<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssigneesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

    if(Schema::hasTable('assignees')) return;  
    
        Schema::create('assignees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('phone');
            $table->string('location');
            $table->string('email');
            $table->timestamps();
        });

        Schema::create('assignees_skills', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('assignee_id');
            $table->unsignedBigInteger('skill_id');
            $table->timestamps();

            $table->unique(['skill_id','assignee_id']);

            $table->foreign('assignee_id')->references('id')->on('assignees')->onDelete('cascade');
            $table->foreign('skill_id')->references('id')->on('skills')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assignees');
    }
}
