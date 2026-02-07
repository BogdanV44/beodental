<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    protected $hours = ['01:00', '02:00', '03:00', '04:00', '05:00', '06:00', '07:00',
        '08:00', '09:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00',
        '17:00', '18:00', '19:00', '20:00', '21:00', '22:00', '23:00', '00:00'];
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('hours', function (Blueprint $table) {
            $table->id('hour_id');
            $table->string('name');
            $table->boolean('is_available_for_booking')->default(0);
            $table->boolean('is_active')->default(1);
        });

        // ** Default Records Start ** //
        foreach($this->hours as $hour) {
            if(in_array($hour, ['12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00', '19:00', '20:00'])) {
                DB::table('hours')->insert(['name' => $hour, 'is_available_for_booking' => 1]);
                continue;
            }
            DB::table('hours')->insert(['name' => $hour]);
        }
        // ** Default Records End ** //
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hours');
    }
};
