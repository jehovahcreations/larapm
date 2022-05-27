<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubmenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('submenus', function (Blueprint $table) {
            $table->id();
            $table->string('mainmenu');
            $table->string('menuName');
            $table->string('menuID');
            $table->string('image');
            $table->string('url');
            $table->integer('points');
            $table->string('dataurl');
            $table->integer('formid');
            $table->integer('field1');
            $table->integer('field2');
            $table->integer('field3');
            $table->integer('field4');
            $table->integer('field5');
            $table->string('vendor');
            $table->integer('amount');
            $table->integer('isActive');

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
        Schema::dropIfExists('submenus');
    }
}
