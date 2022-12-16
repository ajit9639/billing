<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            // $table->integer('invoice_no');
            $table->string('customer_name');
            
            $table->unsignedBigInteger('item_name');
            $table->foreign('item_name')->references('id')->on('items');

            $table->integer('total_qty');
            $table->float('sub_total');
            $table->float('gst_amt');
            $table->float('total_amt');
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
        Schema::dropIfExists('invoices');
    }
};
