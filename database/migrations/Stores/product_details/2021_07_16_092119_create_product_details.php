<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained();
            $table->integer('long_dimension')->nullable();
            $table->integer('wide_dimension')->nullable();
            $table->integer('hight_dimension')->nullable();
            $table->integer('weight');
            $table->integer('qty');
            $table->double('base_price', 8, 2);
            $table->double('list_price', 8, 2)->default(0);
            $table->double('selling_price', 8, 2);
            $table->text('description')->nullable();
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
        Schema::dropIfExists('product_details');
    }
}
