<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDealersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dealers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('dealer_code');
            $table->string('dealer_name');
            $table->string('dealer_city');
            $table->string('dealer_phone');
            $table->string('dealer_email');
            $table->string('dealer_address');
            $table->string('monthly_target');
            $table->string('quarterly_target');
            $table->string('monthly_bonus');
            $table->string('opening_due');
            $table->string('current_due');
            $table->string('date');
            $table->tinyInteger('status')->default('0');

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dealers');
    }
}
