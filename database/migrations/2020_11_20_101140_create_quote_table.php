<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuoteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quote', function (Blueprint $table) {
          $table->string('symbol');
          $table->string('open');
          $table->string('high');
          $table->string('low');
          $table->string('price');
          $table->string('volume');	
          $table->string('trading_day');
          $table->string('previous_close');
          $table->string('change');	
          $table->string('change_percent');			  
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
        Schema::dropIfExists('quote');
    }
}
