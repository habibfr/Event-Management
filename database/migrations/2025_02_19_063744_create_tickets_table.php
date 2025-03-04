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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('participant_id')->constrained('participants');
            $table->foreignId('event_id')->constrained('events');
            $table->string('payment_method')->nullable();
            $table->boolean('payment_status', false);
            $table->integer('paid_at')->nullable();
            $table->string('receipt_of_payment')->nullable();
            $table->timestamps();

            // Add unique constraint to ensure one participant can only register once per event
            $table->unique(['participant_id', 'event_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
