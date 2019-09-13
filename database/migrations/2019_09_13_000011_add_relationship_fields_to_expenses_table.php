<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToExpensesTable extends Migration
{
    public function up()
    {
        Schema::table('expenses', function (Blueprint $table) {
            $table->unsignedInteger('expense_category_id')->nullable();

            $table->foreign('expense_category_id', 'expense_category_fk_334989')->references('id')->on('expense_categories');

            $table->unsignedInteger('created_by_id')->nullable();

            $table->foreign('created_by_id', 'created_by_fk_335008')->references('id')->on('users');
        });
    }
}
