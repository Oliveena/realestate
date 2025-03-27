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

        Schema::create('users', function (Blueprint $table) {
            $table->id('id')->primary(); // Primary key
            $table->string('firstName', 100);
            $table->string('lastName', 100);
            $table->bigInteger('phoneNumber')->nullable();
            $table->string('email', 100)->unique(); 
            $table->string('password', 200);
            $table->enum('city', ['Montreal', 'Laval', 'Longueuil', 'Brossard', 'Boucherville']);
            $table->enum('role', ['Realtor', 'Buyer']);
            $table->string('google_id')->nullable()->unique();
            $table->string('facebook_id')->nullable()->unique();
            $table->timestamps(); 
        });        
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
