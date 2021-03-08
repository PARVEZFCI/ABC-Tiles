<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('customer_code');
            $table->string('customer_name');
            $table->string('customer_city');
            $table->string('customer_phone');
            $table->string('customer_fax');
            $table->string('customer_email');
            $table->string('customer_address');
            $table->string('contact_person_name');
            $table->string('contact_person_designation');
            $table->string('transport_allowance_factory');
            $table->string('transport_allowance_wh');
            $table->string('monthly_bonous');
            $table->string('brokage_demerage');
            $table->string('openig_due');
            $table->string('current_due');
            $table->string('customer_status');
            $table->string('monthly_target');
            $table->string('quarterly_target');
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
        Schema::dropIfExists('customer');
    }
}
