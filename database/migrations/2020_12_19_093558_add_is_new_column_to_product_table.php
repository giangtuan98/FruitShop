<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIsNewColumnToProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->boolean('is_new')->default(false);
            $table->boolean('is_hot')->default(false);
            $table->boolean('is_coming_soon')->default(true);
            $table->bigInteger('quantity')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasColumns('products', ['is_new', 'is_hot', 'is_coming_soon', 'quantity'])) {
            Schema::table('products', function (Blueprint $table) {
                $table->dropColumn('is_new');
                $table->dropColumn('is_hot');
                $table->dropColumn('is_coming_soon');
                $table->dropColumn('quantity');
            });
        }
    }
}
