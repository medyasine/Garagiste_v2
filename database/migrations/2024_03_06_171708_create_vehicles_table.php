<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();         
            $table->string('make');
            $table->string('model');
            $table->string('fuelType');
            $table->string('registration');
            $table->string('photos');
            $table->unsignedBigInteger('userId')->nullable(); 
            $table->foreign('userId')->references('id')->on('users')->onDelete('cascade'); 
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};
