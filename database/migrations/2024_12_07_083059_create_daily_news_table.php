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
        Schema::create('daily_news', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->string('title', 255);
            $table->string('slug', 255);
            $table->longText('details');
            $table->string('thumbnail', 255);
            $table->longText('images');
            $table->dateTime('date');
            $table->boolean('is_featured')->default(false);
            $table->boolean('is_top')->default(false);
            $table->boolean('is_popular')->default(false);
            $table->boolean('is_breaking')->default(false);
            $table->boolean('is_recent')->default(false);
            $table->integer('view_count')->default(0);
            $table->enum('status', ['active', 'deactive']);
            $table->tinyInteger('created_by')->nullable();
            $table->tinyInteger('updated_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('daily_news');
    }
};
