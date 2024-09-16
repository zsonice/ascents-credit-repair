<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('notes', function (Blueprint $table) {
            $table->id(); // Auto-incrementing ID field
            $table->text('notes'); // Field to store the paragraph of notes
            $table->tinyInteger('level')->default(0); // Field to store level with default value 0
            $table->foreignId('created_by')->constrained('users')->onDelete('cascade'); // Foreign key for user_id from users table
            $table->foreignId('client_id')->constrained('clients')->onDelete('set null')->nullable();
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notes');
    }
};
