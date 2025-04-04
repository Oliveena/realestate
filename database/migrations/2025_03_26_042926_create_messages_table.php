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
        Schema::create('messages', function (Blueprint $table) {
            $table->id('messageId')->primary();
            $table->unsignedBigInteger('senderId')->nullable(); // Add nullable constraint for senderId
            $table->unsignedBigInteger('receiverId');
            $table->unsignedBigInteger('propertyId'); 
            $table->string('senderName', 100);
            $table->string('senderEmail', 100);
            $table->string('senderPhone', 10);
            $table->string('messBody', 500);
    
            // Foreign key constraints
            $table->foreign('senderId')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('receiverId')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('propertyId')->references('propertyId')->on('properties')->onDelete('cascade'); // Add foreign key constraint for propertyId
    
            // Indexes
            $table->index('senderId', 'messages_FK_1');
            $table->index('receiverId', 'messages_FK_2');
            $table->index('propertyId', 'messages_FK_3'); // Add index for propertyId

            $table->timestamps(); // created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('messages');
    }
};
