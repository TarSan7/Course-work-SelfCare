<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->date('dateOfBirthday');
            $table->date('desiredDateOfCourse');
            $table->string('tel');
            $table->integer('yoga');
            $table->integer('meditation');
            $table->integer('food');
            $table->boolean('constrM');
            $table->boolean('constrY');
            $table->boolean('constrF');
            $table->boolean('constrMY');
            $table->boolean('constrMF');
            $table->boolean('constrYF');
            $table->boolean('constrFM');
            $table->boolean('constrMYF');
            $table->double('totalPrice');
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
}
