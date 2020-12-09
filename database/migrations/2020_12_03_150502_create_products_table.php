<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->bigInteger('unit_price')->unsigned();
            $table->string('unit');
            $table->bigInteger('category_id')->unsigned();
            $table->bigInteger('promotion_price')->unsigned();
            // $table->tinyInteger('promotion_percent')->unsigned();
            $table->date('promotion_start_date');
            $table->date('promotion_end_date');
            $table->text('description')->nullable();
            $table->string('image');
            $table->softDeletes();
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
        Schema::dropIfExists('products');
    }
}
