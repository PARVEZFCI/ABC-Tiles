<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productdetails', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('product_type');
            $table->string('product_code');
            $table->string('product_name');
            $table->string('product_specification');
            $table->string('containde_per_cartoon');
            $table->string('opening_quantity_ctn');
            $table->string('opening_quantity');
            $table->string('present_stock');
            $table->string('unit_mesurement');
            $table->string('grade');
            $table->string('unit_price');
            $table->string('comission');
            $table->string('bonus_option');
            $table->string('date');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productdetails');
    }
}
