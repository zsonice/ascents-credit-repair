<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('client_accounts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('client_id');
            $table->unsignedBigInteger('client_import_id');
            $table->string('account_name');
            $table->string('bureau');
            $table->string('account_no');
            $table->integer('high_balance');
            $table->string('last_verified');
            $table->string('date_of_last_activity');
            $table->string('date_reported');
            $table->string('date_opened');
            $table->integer('balance_owed');
            $table->string('closed_date')->nullable();
            $table->string('account_rating')->nullable();
            $table->string('account_description')->nullable();
            $table->string('dispute_status')->nullable();
            $table->string('creditor_type')->nullable();
            $table->string('account_status')->nullable();
            $table->string('payment_status')->nullable();
            $table->string('creditor_remarks')->nullable();
            $table->integer('payment_amount')->nullable();
            $table->string('last_payment')->nullable();
            $table->string('term_length')->nullable();
            $table->integer('past_due_amount')->nullable();
            $table->string('account_type')->nullable();
            $table->string('payment_frequency')->nullable();
            $table->integer('credit_limit')->nullable();
            $table->timestamps();

            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');
            $table->foreign('client_import_id')->references('id')->on('client_import')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('client_accounts');
    }
};

