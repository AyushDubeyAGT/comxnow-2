<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('docdetails', function (Blueprint $table) {
            $table->id();
            $table->string('iso');
            $table->string('iso_certificate');
            $table->string('quality_certificate');
            $table->string('certificate');
            $table->string('last_three_yrs_turnover');
            $table->string('last_three_yrs_itr');
            $table->string('iso_registration');
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
        Schema::dropIfExists('docdetails');
    }
}
