<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExpanseManageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expanse_manage', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cat_name');
            $table->string('title');
            $table->string('details');
            $table->integer('amount');
            $table->string('date');
            $table->string('date_time');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('expanse_manage');
    }
}
