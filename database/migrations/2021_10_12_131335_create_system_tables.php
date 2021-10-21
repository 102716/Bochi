<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSystemTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('role', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });

        Schema::create('user', function (Blueprint $table) {
            $table->id();

            $table->foreign('role_id')->references('id')->on('role'); 
        });

        Schema::create('room', function (Blueprint $table) {
            $table->id();
            $table->string('room_name');
            $table->text('description');
            $table->datetime('start_time');
            $table->datetime('end_time');

            $table->foreign('user_id')->references('id')->on('user');
        });

        Schema::create('appointment', function(Blueprint $table){
            $table->id();
            $table->string('appointment_name');
            $table->date('appointment_date');
            $table->string('location');
            $table->text('description');  
            
            $table->foreign('user_id')->references('id')->on('user');
        });

        
        Schema::create ('disease', function (Blueprint $table){
            $table->id();
            $table->string('name');
            $table->text('description');

            $table->foreign('user_id')->references('id')->on('user');
        });

        Schema::create('symptoms', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('tags');
            $table->unsignedBigInteger('disease_id');

            $table->foreign('disease_id')->references('id')->on('disease');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('system_tables');
    }
}
