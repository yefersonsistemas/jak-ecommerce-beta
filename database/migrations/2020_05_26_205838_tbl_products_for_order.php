<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblProductsForOrder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_productsForOrder', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('orderCode')->unique();
            $table->string('productCode');
            $table->string('quantity');
            $table->float('tax');
            $table->float('cost');

            $table->foreign('productCode')->references('code')->on('tbl_productos');
            $table->foreign('orderCode')->references('code')->on('tbl_order');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_productsForOrder');
    }
}
