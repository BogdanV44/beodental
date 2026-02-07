<?php

use App\Models\SurgeryChair;
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
        Schema::create('surgery_chairs', function (Blueprint $table) {
            $table->id('surgery_chair_id');
            $table->integer('number_of_chairs');
            $table->boolean('is_active')->default(1);
            $table->timestamps();
        });

        // ** Default Records Start ** //
        SurgeryChair::firstOrCreate([
            'number_of_chairs' => 2,
        ]);
        // ** Default Records End ** //
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surgery_chairs');
    }
};
