<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookAppointmentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "services" => "required|exists:services,service_id",
            "dentists" => "required|exists:dentists,dentist_id",
            "dates" => "required",
            "appointment_hours" => "required|exists:hours,hour_id",
        ];
    }

    public function messages(): array
    {
        return [
            "required" => ":Attribute is required",
            "exists" => ":Attribute does not exist",
        ];
    }
}
