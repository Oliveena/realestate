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
        Schema::create('images', function (Blueprint $table) {
            $table->id('imageId') ->primary(); 
            $table->enum('imageType', ['avatar', 'photos', 'illustration']); 
            $table->string('image', 100); 

            $table->timestamps(); // created_at and updated_at
        });

        Schema::create('users', function (Blueprint $table) {
            $table->id('id')->primary(); // Primary key
            $table->string('firstName', 100);
            $table->string('lastName', 100);
            $table->bigInteger('phoneNumber')->nullable();
            $table->string('email', 100)->unique(); 
            $table->string('password', 200);
            $table->enum('city', ['Montreal', 'Laval', 'Longueuil', 'Brossard', 'Boucherville']);
            $table->enum('role', ['Realtor', 'Buyer']);
            $table->unsignedBigInteger('avatar')->nullable(); 
            $table->string('google_id')->nullable()->unique();
            $table->string('facebook_id')->nullable()->unique();
            $table->timestamps(); 
        
            // Foreign key constraint for avatar
            $table->foreign('avatar')->references('imageId')->on('images')->onDelete('cascade');
        
            // Indexes for optimization
            $table->index('avatar', 'users_FK_1'); 
        });        

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });


        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('images');
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
