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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->boolean('status')->default(false);
            $table->boolean('payment')->default(false);
            $table->string('country');
            $table->string('provience');
            $table->string('firstname');
            $table->string('lastame');
            $table->string('address');
            $table->string('city');
            $table->integer('ward');
            $table->string('Apartmentno')->nullable();
            $table->integer('zip')->nullable();
            $table->string('email');
            $table->integer('phone');
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
        Schema::dropIfExists('orders');
    }
};
