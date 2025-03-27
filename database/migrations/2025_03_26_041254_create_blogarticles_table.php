<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogarticlesTable extends Migration
{
    public function up()
    {
        Schema::create('blogarticles', function (Blueprint $table) {
            $table->id('blogId')->primary();
            $table->string('title', 100);
            $table->text('body');
            $table->unsignedBigInteger('blogAuthorId');
        
            // Foreign key constraints
            $table->foreign('blogAuthorId')->references('id')->on('users')->onDelete('cascade');
        
            // Indexes
            $table->index('blogAuthorId', 'blogarticles_FK_1');
        
            $table->timestamps(); // created_at and updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('blogarticles');
    }
}
