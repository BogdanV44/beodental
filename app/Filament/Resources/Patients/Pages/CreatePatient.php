<?php

namespace App\Filament\Resources\Patients\Pages;

use App\Filament\Resources\Patients\PatientResource;
use App\Models\Patient;
use App\Models\User;
use Filament\Resources\Pages\CreateRecord;
use \Illuminate\Database\Eloquent\Model;

class CreatePatient extends CreateRecord
{
    protected static string $resource = PatientResource::class;

    protected function handleRecordCreation(array $data) : Model
    {
        if(!$data['make_user_account'])
        {
            return parent::handleRecordCreation($data);
        }
        // If administrator choose to create a user account for the patient at the same time

        $user = new User();
        $user->fk_role_id = 4;
        $user->email = $data['user_email'];
        $user->password = bcrypt($data['password']);
        $user->save();


        $patient = new Patient();
        $patient->first_name = $data['first_name'];
        $patient->last_name = $data['last_name'];
        $patient->email = $data['email'];
        $patient->phone = $data['phone'];
        $patient->fk_user_id = $user->user_id;
        $patient->save();

        $user->fk_patient_id = $patient->patient_id;
        $user->save();

        return $patient;
    }
}
