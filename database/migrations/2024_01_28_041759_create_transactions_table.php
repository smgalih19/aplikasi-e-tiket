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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('ticket_id');
            $table->foreign('ticket_id')->references('id')->on('tickets');
            $table->string('external_id', 255);
            $table->string('name_buyer', 255);
            $table->string('email', 255);
            $table->string('phone_number', 255);
            $table->integer('qty');
            $table->integer('amount');
            $table->string('status_transaction', 255);
            $table->string('expired_date_transaction');
            $table->string('expired_date_ticket')->nullable();
            $table->text('data_payment_gateway');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
