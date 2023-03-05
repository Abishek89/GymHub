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
            Schema::create('trainer', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('userid');
                $table->string('name');
                $table->string('image');
                $table->string('DOB');
                $table->string('gender');
                $table->integer('price')->nullable();
                $table->integer('height');
                $table->integer('weight');
                $table->string('email');
                $table->biginteger('phone');
                $table->timestamps();
                $table->foreign('userid')->references('id')->on('users');
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
