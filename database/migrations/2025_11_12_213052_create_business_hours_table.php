<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    protected $business_hours = [
        ['day_number' => '1', 'fk_from_hour_id' => '12', 'fk_to_hour_id' => '20', 'is_work_day' => 1],
        ['day_number' => '2', 'fk_from_hour_id' => '12', 'fk_to_hour_id' => '20', 'is_work_day' => 1],
        ['day_number' => '3', 'fk_from_hour_id' => '12', 'fk_to_hour_id' => '20', 'is_work_day' => 1],
        ['day_number' => '4', 'fk_from_hour_id' => '12', 'fk_to_hour_id' => '20', 'is_work_day' => 1],
        ['day_number' => '5', 'fk_from_hour_id' => '12', 'fk_to_hour_id' => '20', 'is_work_day' => 1],
        ['day_number' => '6', 'fk_from_hour_id' => '1', 'fk_to_hour_id' => '24', 'is_work_day' => 0],
        ['day_number' => '7', 'fk_from_hour_id' => '1', 'fk_to_hour_id' => '24', 'is_work_day' => 0],
    ];
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('business_hours', function (Blueprint $table) {
            $table->id('business_hour_id');
            $table->smallInteger('day_number');
            $table->foreignId('fk_from_hour_id')->constrained('hours', 'hour_id');
            $table->foreignId('fk_to_hour_id')->constrained('hours', 'hour_id');
            $table->boolean('is_work_day')->default(1);
        });

        // ** Default Records Start ** //
        foreach($this->business_hours as $day) {
            DB::table('business_hours')->insert([
                'day_number' => $day['day_number'],
                'fk_from_hour_id' => $day['fk_from_hour_id'],
                'fk_to_hour_id' => $day['fk_to_hour_id'],
                'is_work_day' => $day['is_work_day'],
            ]);
        }
        // ** Default Records End ** //
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('business_hours');
    }
};
