<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_status', function (Blueprint $table) {
            $table->id(); // Creates an auto-incrementing ID column
            $table->unsignedBigInteger('client_id'); // Foreign key for client ID
            $table->string('status'); // Status field
            $table->text('remarks')->nullable(); // Optional remarks field
            $table->unsignedBigInteger('updated_by'); // Foreign key for user ID
            $table->timestamps(); // Created at and Updated at timestamps

            // Foreign key constraints
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');
            $table->foreign('updated_by')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('client_status');
    }
};
