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
            $table->id('imageId')->primary();
            $table->unsignedBigInteger('posterId');
            $table->unsignedBigInteger('thepropertyId');
            $table->unsignedBigInteger('theblogId');
            $table->enum('imageType', ['avatar', 'photos', 'illustration']);
            $table->string('imagePath', 255);
            $table->integer('position');
        
            // Foreign key constraints
            $table->foreign('posterId')->references('id')->on('users');
            $table->foreign('thepropertyId')->references('propertyId')->on('properties')->onDelete('cascade');
            $table->foreign('theblogId')->references('blogId')->on('blogarticles')->onDelete('cascade');

            // Indexes
            $table->index('posterId', 'images_FK_1');
            $table->index('thepropertyId', 'images_FK_2');
            $table->index('theblogId', 'images_FK_3');
        
            $table->timestamps(); // created_at and updated_at
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('images');
    }
};
