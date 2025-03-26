<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id('commentId')->primary();
            $table->unsignedBigInteger('commentAuthorID');
            $table->string('commentBody', 200);
            $table->unsignedBigInteger('articleId');
        
            // Foreign key constraints
            $table->foreign('commentAuthorID')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('articleId')->references('blogId')->on('blogarticles')->onDelete('cascade');
        
            // Indexes
            $table->index('commentAuthorID', 'comments_FK_1');
            $table->index('articleId', 'comments_FK_2');

            $table->timestamps(); // created_at and updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
