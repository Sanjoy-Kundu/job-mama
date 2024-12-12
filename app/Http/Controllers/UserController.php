<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function registrationPage()
    {
        return view('pages.auth.registrationPage');
    }

    public function loginPage()
    {
        return view('pages.auth.loginPage');
    }

    public function registrationUser(Request $request)
    {
        try {
            User::create([
                'name' => Str::upper($request->input('name')),
                'email' => $request->input('email'),
                'mobile' => $request->input('mobile'),
                'password' => Hash::make($request->input('password')),
            ]);
            return response()->json(['status' => 'success', 'message' => 'Registration Successfully']);
        } catch (Exception $ex) {
            return response()->json(['status' => 'fail', 'message' => $ex->getMessage()]);
        }
    }

    public function loginUser(Request $request)
    {
        try {
            if (Auth::attempt(['email' => Str::lower($request->input('email')), 'password' => $request->input('password')])) {
                $user = Auth::user();

                $user_id = $user->id;
                $user_role = $user->role;
                $token = 'Bearer ' . $user_id . '-' . Str::random(60);

                return response()->json(['status' => 'success', 'message' => 'Login Successfully', 'token' => $token, 'role' => $user_role]);
            } else {
                return response()->json(['status' => 'fail', 'message' => 'Invlaid User']);
            }
        } catch (Exception $ex) {
            return response()->json(['status' => 'fail', 'message' => $ex->getMessage()]);
        }
    }
}
