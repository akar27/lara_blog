<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('blog_user', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('use_id')->nullable();
            $table->unsignedInteger('blo_id')->nullable();
            $table->string('text');

            $table->foreign('use_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('blo_id')->references('id')->on('blogs')->onDelete('cascade');

            // $table->primary(['text', 'blog_id', 'user_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogs_users');
    }
};
