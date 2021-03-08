<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanydetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companydetails', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('company_code');
            $table->string('company_name');
            $table->string('company_city_&_post');
            $table->string('company_phone');
            $table->string('company_fax');
            $table->string('company_email');
            $table->string('company_address');
            $table->string('contact_person');
            $table->string('c_p_designation');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companydetails');
    }
}
