<?php

use App\Models\AppointmentStatus;
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
        Schema::create('appointment_statuses', function (Blueprint $table) {
            $table->id('appointment_status_id');
            $table->string('name');
        });

        // ** Default Records Start ** //
        foreach(['Booked', 'Finished', 'Canceled'] as $status) {
            AppointmentStatus::firstOrCreate(['name' => $status]);
        }
        // ** Default Records End ** //
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointment_statuses');
    }
};
