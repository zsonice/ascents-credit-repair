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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            // $table->string("client_name");
            // $table->string("team_members");
            $table->string("first_name");
            $table->string("middle_name");
            $table->string("last_name");
            $table->string("suffix");
            $table->string("email");
            $table->integer("ssn")->default(0);
            $table->date("date_of_birth");
            $table->string("address"); 
            $table->string("city");  
            $table->string('state');
            $table->integer('zip_code');
            $table->string('country');
            $table->string('mobile_main');
            $table->string('mobile_alt');
            $table->string('mobile_work');
            $table->string('fax');
            $table->string('previous_address')->nullable();
            $table->string('previous_city')->nullable();
            $table->string('previous_state')->nullable();
            $table->integer('previous_zip_code')->nullable();
            $table->string('previous_country')->nullable();
            $table->string('status');
            $table->date('start_date');
            $table->unsignedBigInteger('assigned_to');
            $table->foreign('assigned_to')->references('id')->on('users')->onDelete('cascade'); 
            //$table->date("last_login_date");
            //$table->string("onboarding_stage"); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
