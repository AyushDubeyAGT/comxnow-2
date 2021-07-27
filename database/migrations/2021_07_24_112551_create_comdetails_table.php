<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comdetails', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');
            $table->string('gst_number');
            $table->string('company_address');
            $table->string('company_website');
            
            $table->string('company_type');
            $table->string('company_email_id');
            $table->string('company_buss_type');
            $table->string('sell_prod');
            $table->string('buy_prod');

            $table->string('company_director');
            $table->string('no_employee');
            $table->string('have_trademark');
            $table->string('patent_name');
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
        Schema::dropIfExists('comdetails');
    }
}
