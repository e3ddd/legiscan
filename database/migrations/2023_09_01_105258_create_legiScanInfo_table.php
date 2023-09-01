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
        Schema::create('legiScanInfo', function (Blueprint $table) {
            $table->id();
            $table->string('query')->nullable();
            $table->index('query');
            $table->integer('relevance')->nullable();
            $table->string('state')->nullable();;
            $table->string('bill_number')->nullable();;
            $table->integer('bill_id')->nullable();;
            $table->string('change_hash')->nullable();;
            $table->string('url')->nullable();;
            $table->string('text_url')->nullable();;
            $table->string('research_url')->nullable();;
            $table->string('last_action_date')->nullable();;
            $table->string('last_action')->nullable();;
            $table->text('title')->nullable();;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('legislatures');
    }
};
