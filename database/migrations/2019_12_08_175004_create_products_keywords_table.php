<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsKeywordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products_keywords', function (Blueprint $table) {
            $table->Increments('id');
            $table->unsignedInteger('product_id')->nullable(true);
            $table->unsignedInteger('keyword_id')->nullable(true);
            $table->timestamps();

//            Constraints
            $table->foreign('keyword_id')->references('id')->on('keywords')
                ->onDelete('SET NULL')->onUpdate('CASCADE');
            $table->foreign('product_id')->references('id')->on('products')
                ->onDelete('SET NULL')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products_keywords');
    }
}
