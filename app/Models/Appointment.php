<?php

namespace App\Models;

use Database\Factories\AppointmentFactory;
use Illuminate\Database\Eloquent\Attributes\UseFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

#[UseFactory(AppointmentFactory::class)]
class Appointment extends Model
{
    use HasFactory;

    protected $primaryKey = 'appointment_id';

    protected $fillable = [
        'appointment_date',
        'fk_hour_id',
        'fk_patient_id',
        'fk_service_id',
        'fk_dentist_id',
        'fk_appointment_status_id',
        'appointment_note'
    ];

    // Relationships //
    public function hour() : BelongsTo
    {
        return $this->belongsTo(Hour::class, 'fk_hour_id');
    }
    public function dentist() : BelongsTo
    {
        return $this->belongsTo(Dentist::class, 'fk_dentist_id')->withTrashed();
    }
    public function patient() : BelongsTo
    {
        return $this->belongsTo(Patient::class, 'fk_patient_id');
    }
    public function appointmentStatus() : BelongsTo
    {
        return $this->belongsTo(AppointmentStatus::class, 'fk_appointment_status_id');
    }
    public function service() : BelongsTo
    {
        return $this->belongsTo(Service::class, 'fk_service_id');
    }
    // Relationships End //


    static function getAvailableDates()
    {
        $dates = Appointment::getDatesExceptWeekends(24);

        foreach ($dates as $date) {
            $appointments = Appointment::where('appointment_date', $date)->get();
        }

        return $dates;
    }

    function hasBookings($date) {
//        $hours = Hour::where('is_available_for_booking', 1)->where('date', $date)->get();
    }
    static function getDatesExceptWeekends($numOfDaysWithWeekends = 30, $format = "Y-m-d") : array
    {
        $dates = array();
        $from = 1;
        for ($i = strtotime('+'.$from.' days'); $i <= strtotime('+'.($from+$numOfDaysWithWeekends).' days'); $i += 86400) {
            if (date('N',$i) < 6) {
                $dates[] = [
                    'value' => date('Y-m-d', $i),
                    'name' => date($format,$i),
                    'disabled' => false
                ];
            }
        }
        return $dates;
    }
}



