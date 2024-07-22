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
        Schema::create('orders', function (Blueprint $table) {
            $table->id('orderid');
            $table->foreignId('userid')->references('userid')->on('users')->onDelete('cascade');
            $table->foreignId('restid')->references('restid')->on('restaurants')->onDelete('cascade');
            $table->dateTime('date');
            $table->string('status');
            $table->decimal('amount', 8, 2);
            $table->string('address');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
