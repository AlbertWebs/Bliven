<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('businesses', function (Blueprint $table) {
            $table->id();
            $table->string('bname')->nullable();
            $table->string('fiscal')->nullable();
            $table->string('bnumber')->nullable();
            $table->string('baddress')->nullable();
            $table->string('b_type')->nullable();
            $table->string('services_content')->nullable();
            $table->string('sources')->nullable();
            $table->string('service_charge')->nullable();
            $table->string('unit_price')->nullable();
            $table->string('discounts')->nullable();
            $table->string('expenses')->nullable();
            $table->string('customers_owe_me')->nullable();
            $table->string('supliers_owe')->nullable();
            $table->string('long_term_loans')->nullable();
            $table->string('prepaid_expenses')->nullable();
            $table->string('accrued_expenses')->nullable();
            $table->string('partners')->nullable();
            $table->string('drawing')->nullable();
            $table->string('investment')->nullable();
            $table->string('avatar')->nullable();
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
        Schema::dropIfExists('businesses');
    }
}
