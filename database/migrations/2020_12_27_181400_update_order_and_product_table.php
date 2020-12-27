<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateOrderAndProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasColumns('products', ['quantity'])) {
            Schema::table('products', function (Blueprint $table) {
                $table->bigInteger('quantity')->default(0)->unsigned()->change();
            });
        }

        if (Schema::hasColumns('orders', ['total_after_sale', 'sale_code'])) {
            Schema::table('orders', function (Blueprint $table) {
                $table->dropColumn('total_after_sale');
                $table->dropColumn('sale_code');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
