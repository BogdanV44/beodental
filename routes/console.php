<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schedule;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

// Change booked appointments (that are done) to finished automatically every hour
Schedule::call(function () {
    DB::table('appointments')
        ->where('appointment_date', '<', date('Y-m-d', time()))
        ->where('fk_appointment_status_id', '=', 1)
        ->update(['fk_appointment_status_id' => 2]);
})->hourly();
