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
            $table->id();
            $table->integer('addedBy')->nullable();
            $table->string('firstName')->nullable();
            $table->string('lastName')->nullable();
            $table->string('motto')->nullable();
            $table->string('category')->nullable();
            $table->string('userType')->nullable();
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('twitter')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('website')->nullable();
            $table->string('address')->nullable();
            $table->string('picture')->nullable();
            $table->string('banner')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->string('status')->nullable();
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
