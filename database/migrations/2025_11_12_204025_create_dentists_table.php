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
        Schema::create('dentists', function (Blueprint $table) {
            $table->id('dentist_id');
            $table->foreignId('fk_user_id')->nullable()->constrained('users', 'user_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('title')->nullable();
            $table->text('short_description')->nullable();
            $table->text('biography')->nullable();
            $table->text('additional_description')->nullable();
            $table->string('email')->nullable();
            $table->integer('order');
            $table->string('image_route')->nullable();
            $table->boolean('is_showing')->default(1);
            $table->boolean('is_active')->default(1);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dentists');
    }
};
