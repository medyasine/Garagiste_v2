<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->decimal('additionalCharges', 10, 2)->nullable(); 
            $table->decimal('totalAmount', 10, 2)->nullable(); 
            $table->unsignedBigInteger('repairID')->nullable();
            $table->foreign('repairID')->references('id')->on('repairs')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
