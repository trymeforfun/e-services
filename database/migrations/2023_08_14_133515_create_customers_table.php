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

        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->date('order_date')->nullable();
            $table->string('name')->nullable();
            $table->string('phone')->nullable();
            $table->text('address')->nullable();
            $table->string('shoe_brand')->nullable();
            $table->string('color')->nullable();
            $table->string('size')->nullable();
            $table->string('minus')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
