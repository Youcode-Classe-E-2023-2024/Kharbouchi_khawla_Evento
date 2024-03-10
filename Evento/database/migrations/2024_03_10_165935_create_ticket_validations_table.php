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
        Schema::create('ticket_validations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_ticket');
            $table->boolean('validation');
            $table->timestamps();
        
            $table->foreign('id_ticket')->references('id')->on('tickets')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ticket_validations');
    }
};
