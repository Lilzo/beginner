<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivityLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activity_logs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->nullabel();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('area');
            $table->string('applicant');
            $table->string('problem');
            $table->string('activity');
            $table->boolean('is_solved')->default(false);
            $table->timestamps();
            $table->timestamp('ended_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('activity_logs');
    }
}
