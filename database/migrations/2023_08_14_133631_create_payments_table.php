<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('invoice_number');
            $table->date('due_date')->nullable();
            $table->string('bill_to')->nullable();
            $table->string('payable_to')->nullable();
            $table->string('treatment')->nullable();
            $table->integer('many')->nullable();
            $table->string('price');
            $table->string('total');
            $table->tinyInteger('pick_&_delivery');
            $table->string('tax');
            $table->string('discount');
            $table->date('amount_due')->nullable();
            $table->string('bank');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
