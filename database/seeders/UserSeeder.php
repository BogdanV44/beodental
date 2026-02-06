<?php

namespace Database\Seeders;

use App\Models\Patient;
use App\Models\User;
use Database\Factories\UserFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()
            ->count(250)
            ->create()
            ->each(function ($user) {
                $user->patient()->save(Patient::factory()->create(['email' => $user->email]));
                $user->fk_patient_id = $user->patient()->first()->patient_id;
                $user->save();
            });
    }
}
