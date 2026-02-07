<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserLoginRequest;
use App\Http\Requests\UserRegisterRequest;
use App\Models\Patient;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\URL;

class AuthController extends Controller
{
    public function loginIndex()
    {
        return view('front.pages.auth.login');
    }
    public function registerIndex() {
        return view('front.pages.auth.register');
    }

    public function registerUser(UserRegisterRequest $request) {
        try {
            $user = new User();
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->fk_role_id = 4;
            $user->save();

            $patient = new Patient();
            $patient->first_name = $request->first_name;
            $patient->last_name = $request->last_name;
            $patient->phone = $request->phone;
            $patient->email = $request->email;
            $patient->fk_user_id = $user->user_id;
            $patient->save();

            $user->fk_patient_id = $patient->patient_id;
            $user->save();

            Auth::login($user);

            $routeName = $request->get('fromAppointment') == 1 ? "appointment" : "home";
            return redirect()->route($routeName);
        } catch(\Exception $e) {
            return 500;
        }

    }
    public function loginUser(UserLoginRequest $request) {
        $email = $request->email;
        $password = $request->password;

        $user = User::where('email', $email)->first();
        if (!Hash::check($password, $user->password)) {
            return redirect()->back()->withInput()->with('error-msg', 'Wrong password!');
        }

        Auth::login($user);

        $routeName = $request->get('fromAppointment') == 1 ? "appointment" : "home";
        return redirect()->route($routeName);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->back();
    }
}
