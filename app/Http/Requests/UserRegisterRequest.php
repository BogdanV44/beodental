<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRegisterRequest extends FormRequest
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
            "email" => "required|email|unique:users",
            "first_name" => "required|string|min:2",
            "last_name" => "required|string|min:2",
            "phone" => "required|string|min:9",
            "password" => "required|min:8|max:100",
            "password_confirmation" => "required|min:8|same:password"
        ];
    }
    public function messages(): array
    {
        return [
            "required" => ":Attribute is required",
            "string" => ":Attribute must be a string",
            "min" => ":Attribute must be at least :min",
            "max" => ":Attribute must be at most :max",
            "same" => ":Attributes must be same as :password",
            "email.unique" => "There is already a user with this email address",
            "email.email" => "Please enter a valid email address",
        ];
    }
}
