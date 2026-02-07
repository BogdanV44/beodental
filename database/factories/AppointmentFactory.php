<?php

namespace Database\Factories;

use App\Models\Appointment;
use App\Models\Dentist;
use App\Models\Hour;
use App\Models\Patient;
use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Appointment>
 */
class AppointmentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     */
    protected $model = Appointment::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $dates = $this->getDatesExceptWeekendsForFakeData();
        $appointment_date = fake()->randomElement($dates);
        $status = 2; // Finished
        if($appointment_date > now()){
            $status = 1;
        }

        return [
            'appointment_date' => $appointment_date,
            'fk_appointment_status_id' => $status,
            'fk_hour_id' => Hour::where('is_available_for_booking', 1)->inRandomOrder()->first()->hour_id,
            'fk_dentist_id' => Dentist::where('dentist_id', '!=', 8)->inRandomOrder()->first()->dentist_id,
            'fk_patient_id' => Patient::inRandomOrder()->first()->patient_id,
            'fk_service_id' => Service::inRandomOrder()->first()->service_id,
        ];
    }



    // Gets dates 6 months before today and 30 days in the future. Without weekends.
    public function getDatesExceptWeekendsForFakeData(): array
    {
        $dates = array();
        for ($i = strtotime('-180 days'); $i <= strtotime('+30 days'); $i += 86400) {
            if (date('N',$i) < 6) {
                $dates[] = date('Y-m-d', $i);
            }
        }
        return $dates;
    }
}
