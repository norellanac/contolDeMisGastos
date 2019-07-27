<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExpensesIncomesTables extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('accounts', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->timestamps();
      $table->integer('budget')->nullable();
      $table->integer('saving')->nullable();

      $table->unsignedBigInteger('user_id');
      $table->foreign('user_id')
      ->references('id')->on('users');
    });

    Schema::create('expenses', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->timestamps();
      $table->string('description')->nullable();
      $table->integer('quantity')->nullable();
      $table->integer('total');

      $table->unsignedBigInteger('subcategory_id');
      $table->foreign('subcategory_id')
      ->references('id')->on('subcategories');

      $table->unsignedBigInteger('account_id');
      $table->foreign('account_id')
      ->references('id')->on('accounts');
    });

    Schema::create('incomes', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->timestamps();
      $table->string('description')->nullable();
      $table->integer('quantity')->nullable();
      $table->integer('total');
      
      $table->unsignedBigInteger('subcategory_id');
      $table->foreign('subcategory_id')
      ->references('id')->on('subcategories');

      $table->unsignedBigInteger('account_id');
      $table->foreign('account_id')
      ->references('id')->on('accounts');
    });

  }

  /**
  * Reverse the migrations.
  *
  * @return void
  */
  public function down()
  {
    Schema::dropIfExists('expenses');
    Schema::dropIfExists('incomes');
    Schema::dropIfExists('accounts');
  }
}
