<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDemoproductsTable extends Migration
{
    /**
     * Run the migrations....
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('demo_products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('p_name');
            $table->float('p_price');
            $table->date('p_expiry');
            $table->string('p_image');
            $table->boolean('p_status');
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
        //
        Schema::drop('demo_products');
    }
}
