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
        Schema::create('cms_login', function (Blueprint $table) {
            $table->id(); // Creates an auto-incrementing primary key
            $table->string('username'); // Column for storing usernames
            $table->string('password'); // Column for storing passwords (hashed)
            $table->string('cms_type'); // Column for storing CMS types
            $table->unsignedBigInteger('client_id'); // Foreign key to link to clients table
            $table->timestamps(); // Created_at and updated_at columns

            // Optionally, you can add foreign key constraints if you have a clients table
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cms_login');
    }
};
