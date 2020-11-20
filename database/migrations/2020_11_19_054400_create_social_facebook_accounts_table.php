<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSocialFacebookAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('social_facebook_accounts', function (Blueprint $table) {
          $table->integer('user_id');
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
        Schema::dropIfExists('social_facebook_accounts');
    }
}
