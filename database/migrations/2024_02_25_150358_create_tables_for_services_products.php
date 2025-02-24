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
        Schema::create('user_logs', function (Blueprint $table) {
            $table->id();
            $table->integer('userID')->nullable();
            $table->string('username')->nullable();
            $table->string('IPAddress')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
        });
        
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->integer('userID')->nullable();
            $table->integer('roleID')->nullable();
            $table->string('title')->nullable();
            $table->string('category')->nullable();
            $table->string('link')->nullable();
            $table->string('progress')->nullable();
            $table->text('excerpt')->nullable();
            $table->text('body')->nullable();
            $table->string('picture')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
        });

        Schema::create('tech_stacks', function (Blueprint $table) {
            $table->id();
            $table->integer('userID')->nullable();
            $table->string('name')->nullable();
            $table->string('level')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
        });

        Schema::create('specialties', function (Blueprint $table) {
            $table->id();
            $table->integer('userID')->nullable();
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
        });

        Schema::create('experiences', function (Blueprint $table) {
            $table->id();
            $table->integer('userID')->nullable();
            $table->string('title')->nullable();
            $table->string('organisation')->nullable();
            $table->string('location')->nullable();
            $table->string('start_date')->nullable();
            $table->string('end_date')->nullable();
            $table->text('description')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
        });

        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->integer('userID')->nullable();
            $table->string('title')->nullable();
            $table->string('url')->nullable();
            $table->string('category')->nullable();
            $table->string('locale')->nullable();
            $table->string('author')->nullable();
            $table->string('picture')->nullable();
            $table->text('excerpt')->nullable();
            $table->text('body')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
        });

        Schema::create('testimonials', function (Blueprint $table) {
            $table->id();
            $table->integer('userID')->nullable();
            $table->string('name')->nullable();
            $table->string('role')->nullable();
            $table->text('body')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('twitter')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
        });

        Schema::create('achievements', function (Blueprint $table) {
            $table->id();
            $table->integer('userID')->nullable();
            $table->string('title')->nullable();
            $table->string('url')->nullable();
            $table->string('organization')->nullable();
            $table->string('date')->nullable();
            $table->text('description')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
        });

        Schema::create('engagements', function (Blueprint $table) {
            $table->id();
            $table->integer('userID')->nullable();
            $table->string('title')->nullable();
            $table->string('community')->nullable();
            $table->string('start_date')->nullable();
            $table->string('end_date')->nullable();
            $table->text('description')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
        });

        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->integer('userID')->nullable();
            $table->string('title')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
        });

        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->integer('userID')->nullable();
            $table->string('title')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
        });

        // Schema::create('resumes', function (Blueprint $table) {
        //     $table->id();
        //     $table->integer('userID')->nullable();
        //     $table->string('file_path');
        //     $table->string('description')->nullable();
        //     $table->string('status')->nullable();
        //     $table->timestamps();
        // }); 
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tables_for_services_products');
    }
};
