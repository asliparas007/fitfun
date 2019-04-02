<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFitnessTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fitness', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('name');
            $table->text('gender');
            $table->text('age');
            $table->text('email');
            $table->text('phone_no');
            $table->text('website');
            $table->text('address');
            $table->text('city');
            $table->text('state');
            $table->text('message');
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
        Schema::dropIfExists('fitness');
    }
}
