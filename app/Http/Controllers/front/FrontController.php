<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Http\Controllers\RootController;
use App\Http\Requests\BookAppointmentRequest;
use App\Models\Appointment;
use App\Models\Dentist;
use App\Models\Hour;
use App\Models\Page;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Mockery\Exception;

class FrontController extends RootController
{
    function homeIndex() {
        $dentists = Dentist::all()->sortBy('order')->take(4);
        return view('front.pages.main.home', ['dentists' => $dentists]);
    }
    function aboutIndex() {
        $dentists = Dentist::all()->sortBy('order')->take(4);
        return view('front.pages.main.about', ['dentists' => $dentists]);
    }

    function ourTeamIndex() {
        $dentists = Dentist::all()->sortBy('order');
        return view('front.pages.main.team', ['dentists' => $dentists]);
    }
    function ourTeamShow($id) {
        $dentist = Dentist::find($id);
        if(!$dentist) {
            abort(404);
        }

        return view('front.pages.main.team-single', ['dentist' => $dentist]);
    }
    function servicesIndex() {
        return view('front.pages.main.services');
    }
    function tourismIndex() {
        return view('front.pages.main.tourism');
    }
    function contactIndex() {
        return view('front.pages.main.contact');
    }
    function appointmentIndex() {
        if(Auth::check()) {
            $appointmentHours = Hour::where('is_available_for_booking', 1)->get();
            $dentists = Dentist::all()->sortBy('order');
            $services = Service::where('is_able_for_reservation', 1)->orderBy('name')->get();

            $dates = Appointment::getDatesExceptWeekends(24, 'd.m.Y, l');
            $this->data['dentists'] = $dentists;
            $this->data['appointmentHours'] = $appointmentHours;
            $this->data['services'] = $services;
            $this->data['dates'] = $dates;
        }
        return view('front.pages.main.appointment', ['data' => $this->data]);
    }
    function appointmentStore(BookAppointmentRequest $request) {
        $service = $request->services;
        $dentist = $request->dentists;
        $date = $request->dates;
        $hour = $request->appointment_hours;

        try {
            $alreadyBooked = Appointment::where('fk_dentist_id', $dentist)->where('appointment_date', $date)->where('fk_hour_id', $hour)->count() ? true : false;
            if(!$alreadyBooked) {
                $appointment = new Appointment();
                $appointment->fk_hour_id = $hour;
                $appointment->fk_dentist_id = $dentist;
                $appointment->fk_patient_id = Auth::user()->patient->patient_id;
                $appointment->fk_appointment_status_id = 1;
                $appointment->fk_service_id = $service;
                $appointment->appointment_date = $date;
                $appointment->appointment_note = '';
                $save = $appointment->save();
            }

            return redirect()->route('appointment')->with('success', 'Appointment booked successfully.');
        } catch (Exception $ex) {
            throw new \Exception("Internal server error", 500);
        }
    }

    function appointmentsIndex() {
        return view('front.pages.special.appointments');
    }
}
