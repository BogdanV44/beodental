<?php

use App\Models\Patient;
use App\Models\User;
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
        Schema::table('patients', function (Blueprint $table) {
            $table->foreignId('fk_user_id')->after('patient_id')->nullable()
                            ->references('user_id')->on('users');
        });

        // Default Data Start //
        Patient::find(1)->update(['fk_user_id' => 2]);
        User::find(2)->update(['fk_patient_id' => 1]);
        // Default Data End //
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('patients', function (Blueprint $table) {
            //
        });
    }
};
