<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dietplans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('userid');
            $table->unsignedBigInteger('trainerid');
            $table->string('meal1')->nullable();
            $table->string('meal2')->nullable();
            $table->string('meal3')->nullable();
            $table->string('meal4')->nullable();
            $table->string('meal5')->nullable();
            $table->string('meal6')->nullable();
            $table->foreign('trainerid')->references('id')->on('trainer');
            $table->foreign('userid')->references('id')->on('users');
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
        //
    }
};
