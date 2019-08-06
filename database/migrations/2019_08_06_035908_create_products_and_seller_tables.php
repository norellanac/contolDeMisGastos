<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsAndSellerTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sellers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('description')->nullable();
            $table->timestamps();

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
            ->references('id')->on('users');
        });

        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->float('price', 8, 2);
            $table->string('description')->nullable();
            $table->string('url_image');
            $table->timestamps();

            $table->unsignedBigInteger('seller_id');
            $table->foreign('seller_id')
            ->references('id')->on('sellers');

            $table->unsignedBigInteger('subcategory_id');
            $table->foreign('subcategory_id')
            ->references('id')->on('subcategories');
        });

        Schema::create('products_records', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('quantity')->nullable();
            $table->timestamps();

            $table->unsignedBigInteger('expense_id');
            $table->foreign('expense_id')
            ->references('id')->on('expenses');

            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')
            ->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sellers');
                Schema::dropIfExists('products');
    }
}
