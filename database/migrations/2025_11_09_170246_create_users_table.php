<?php

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
        Schema::create('users', function (Blueprint $table) {
            $table->id('user_id');
            $table->foreignId('fk_role_id')->constrained('roles', 'role_id');
            $table->foreignId('fk_patient_id')->nullable()->references( 'patient_id')->on('patients');
            $table->string('email');
            $table->string('password');
            $table->boolean('is_active')->default(1);
            $table->softDeletes();
            $table->timestamps();
        });

        // ** Default Records Start ** //
        User::firstOrCreate([
            'fk_role_id' => 2,
            'email' => 'software.admin@beodental.com',
            'password' => Hash::make('Password123!'),
        ]);
        User::firstOrCreate([
            'fk_role_id' => 4,
            'email' => 'test.user@gmail.com',
            'password' => Hash::make('Password123!'),
        ]);
        // ** Default Records End ** //
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
