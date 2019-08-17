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
            ->references('id')->on('users')->onDelete('cascade');
        });

        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->float('price', 8, 2);
            $table->string('description')->nullable();
            $table->string('url_image');
            $table->timestamps();
            $table->softDeletes();

            $table->unsignedBigInteger('seller_id');
            $table->foreign('seller_id')
            ->references('id')->on('sellers')->onDelete('cascade');

            $table->unsignedBigInteger('subcategory_id');
            $table->foreign('subcategory_id')
            ->references('id')->on('subcategories');
        });

        Schema::create('products_records', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('quantity')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->unsignedBigInteger('expense_id');
            $table->foreign('expense_id')
            ->references('id')->on('expenses')->onDelete('cascade');

            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')
            ->references('id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::dropIfExists('products_records');
        Schema::dropIfExists('products');
        Schema::dropIfExists('sellers');
    }
}
