<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @method static firstOrCreate(array $dentist)
 */
class Dentist extends Model
{
    use SoftDeletes;

    protected $primaryKey = 'dentist_id';

    protected $fillable = [
        'fk_user_id',
        'first_name',
        'last_name',
        'title',
        'short_description',
        'biography',
        'additional_description',
        'email',
        'order',
        'image_route',
        'is_showing',
        'is_active',
    ];

    // Relationships //
    public function user() : HasOne
    {
        return $this->hasOne(User::class, 'fk_user_id');
    }
    public function appointments() : HasMany
    {
        return $this->hasMany(Appointment::class, 'fk_dentist_id');
    }
    public function availabilities() : HasMany
    {
        return $this->hasMany(Availability::class, 'fk_dentist_id');
    }
    // Relationships End //

    public function getDayOffDates() : array
    {
        $dates = array();
        $availabilities = $this->availabilities()
                            ->where('to_date', '>=', now())
                            ->get();
        foreach ($availabilities as $availability) {
            $fromDate = $availability->from_date;
            $toDate = $availability->to_date;
            while(strtotime($fromDate) <= strtotime($toDate)) {
                $dates[] = $fromDate;
                $fromDate = strtotime("+1 day", strtotime($fromDate));
                $fromDate = date("Y-m-d", $fromDate);
            }
        }

        return $dates;
    }

    public function hasAvailableHours($date) : bool
    {
        $availabilties = $this->availabilities()
                                ->where('from_date', "<=", $date)
                                ->where('to_date', ">=", $date)
                                ->count();

        $appointments = $this->appointments()
                                ->where('appointment_date', '=', $date)
                                ->where('fk_appointment_status_id', '<', '3')
                                ->count();

        if($appointments >= 8 || $availabilties > 0) {
            return false;
        }

        return true;
    }

    public function isHourAvailable($hour, $date) :bool
    {
        $dentistAppointment = $this->appointments()
                                ->where('appointment_date', '=', $date)
                                ->where('fk_hour_id', $hour)
                                ->where('fk_appointment_status_id', '<', '3')
                                ->count();

        $numOfSurgeryChairs = SurgeryChair::where('is_active', 1)->first()->number_of_chairs;

        $thereIsTwoAppointments = Appointment::where('appointment_date', '=', $date)
                                ->where('fk_hour_id', $hour)
                                ->where('fk_appointment_status_id', '<', '3')
                                ->count() >= $numOfSurgeryChairs;

        if($dentistAppointment || $thereIsTwoAppointments) {
            return false;
        }

        return true;
    }

    public function getFullNameAttribute() : string
    {
        return $this->first_name . ' ' . $this->last_name;
    }
}
