<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSaleCodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sale_codes', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->bigInteger('min_price_require');
            $table->bigInteger('max_price_require');
            $table->tinyInteger('type');
            $table->text('description');
            $table->integer('max_price_reduce');
            $table->integer('amount_reduce');
            $table->string('type_reduce');
            $table->string('expired_date');
            $table->string('quantity');
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
        Schema::dropIfExists('sale_codes');
    }
}
