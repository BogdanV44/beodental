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
        Schema::create('services', function (Blueprint $table) {
            $table->id('service_id');
            $table->foreignId('fk_category_id')->constrained('categories', 'category_id');
            $table->string('name');
            $table->text('description')->nullable();
            $table->integer('order');
            $table->text('additional_description')->nullable();
            $table->decimal('price', 10, 2)->default(0);
            $table->boolean('is_able_for_reservation')->default(0);
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
        Schema::dropIfExists('services');
    }
};
