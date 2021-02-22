<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->dateTime('delivery_date');
            $table->integer('bid_cost');
            $table->integer('assigned_cost');
            $table->enum('status', ['A', 'I']);
            $table->string('attachment');
            $table->unsignedBigInteger('assignee_id');
            $table->unsignedBigInteger('client_id');
            $table->foreign('assignee_id')->references('id')->on('assignees')->onDelete('cascade');
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');
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
        Schema::dropIfExists('tasks');
    }
}
