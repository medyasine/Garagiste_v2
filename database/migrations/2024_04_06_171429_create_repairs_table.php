<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('repairs', function (Blueprint $table) {
            $table->id();
            $table->text('description')->nullable();
            $table->string('status');
            $table->date('startDate')->nullable();
            $table->date('endDate')->nullable();
            $table->text('mechanicNotes')->nullable();
            $table->text('clientNotes')->nullable();
            $table->unsignedBigInteger('mechanicID')->nullable();
            $table->unsignedBigInteger('vehicleID')->nullable();  
            $table->foreign('mechanicID')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('vehicleID')->references('id')->on('vehicles')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('repairs');
    }
};
