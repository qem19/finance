<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBudgetConsumptions extends Migration
{
    public function up()
    {
        Schema::create('budget_consumptions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->float('amount');

            $table->unsignedBigInteger('budget_id');
            $table->foreign('budget_id')->references('id')->on('budgets');

            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    public function down()
    {
        Schema::dropIfExists('budget_consumptions');
    }
}
