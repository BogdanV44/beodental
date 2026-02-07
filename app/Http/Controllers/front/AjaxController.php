<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Dentist;
use App\Models\Hour;
use App\Models\SurgeryChair;

class AjaxController extends Controller
{
    function resolveAjaxRequest($section)
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET" && $section == 'dentist')
        {
            $dates = Appointment::getDatesExceptWeekends(24, 'd.m.Y, l');

            $dentistId = $_GET["id"];
            $selectedDate = $_GET["date"];
            $hour = $_GET["hour"];

            $dentist = Dentist::find($dentistId);
            if ($dentist) {
                foreach ($dates as &$date) {
                    if (!$dentist->hasAvailableHours($date['value'])) {
                        $date['disabled'] = true;
                    }
                }
            }

            $hours = Hour::where('is_available_for_booking', 1)->get();
            if ($selectedDate != "") {
                foreach ($hours as &$hour) {
                    $numOfAppointmentsForHourAndDay = Appointment::where('appointment_date', "=", $selectedDate)
                        ->where('fk_hour_id', $hour->hour_id)
                        ->count();

                    if ($numOfAppointmentsForHourAndDay >= SurgeryChair::where('is_active', 1)->first()->number_of_chairs) {
                        $hour['disabled'] = true;
                    }

                    if (!is_null($dentist) && !$dentist->isHourAvailable($hour->hour_id, $selectedDate)) {
                        $hour['disabled'] = true;
                    }
                }
            }


            $returnArray = [
                "dates" => $dates,
                "hours" => $hours
            ];

            return $returnArray;
        }

        // Cancle appointment as user
        else if ($_SERVER["REQUEST_METHOD"] == "POST" && $section == 'cancel-appointment')
        {
            $appointment_id = $_POST["id"];
            $appointmentNote = $_POST["appointment_note"];

            if ($appointmentNote === "") {
                return false;
            }

            try {
                $appointment = Appointment::find($appointment_id);
                if ($appointment) {
                    $appointment->fk_appointment_status_id = 3;
                    $appointment->appointment_note = $appointmentNote;
                    $appointment->save();
                    return http_response_code(200);
                }
            } catch (\Exception $ex) {
                return http_response_code(500);
            }
        }

        return http_response_code(404);
    }
}

