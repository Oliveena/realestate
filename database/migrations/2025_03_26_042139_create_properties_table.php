<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id('propertyId')->primary();
            $table->unsignedBigInteger('realtorId');
            $table->unsignedBigInteger('buyerId')->nullable();
            $table->unsignedInteger('yearBuilt')->nullable();
            $table->string('address', 100);
            $table->enum('region', ['Montreal', 'Laval', 'Longueuil', 'Brossard', 'Boucherville']);
            $table->string('postalCode', 10);
            $table->enum('type', ['Residential', 'Farm/Country Property', 'Multiplex', 'Commercial/Industrial', 'Land']);
            $table->integer('price');
            $table->longText('description');
            $table->enum('bedroom', ['1', '2', '3'])->nullable();
            $table->enum('bathroom', ['1', '2', '3'])->nullable();
        
            // Foreign key constraints
            $table->foreign('realtorId')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('buyerId')->references('id')->on('users')->onDelete('cascade');
        
            // Indexes
            $table->index('realtorId', 'properties_FK_1');
            $table->index('buyerId', 'properties_FK_2');
            
        
            $table->timestamps(); // created_at and updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('properties');
    }
}
