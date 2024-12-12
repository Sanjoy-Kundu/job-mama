<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function seekerDashboard(){
        try{
            return view('pages.auth.dashboard.dashboardPage');
        }catch(Exception $ex){
            return response()->json(["status" => "fail", "message" => $ex->getMessage()]);
        }
    }

    public function employeeDashboard(){
        try{
            return view('pages.auth.dashboard.dashboardPage');

        }catch(Exception $ex){
            return response()->json(["status" => "fail", "message" => $ex->getMessage()]);
        }
    }

    public function adminDashboard(){
        try{
            return view('pages.auth.dashboard.dashboardPage');

        }catch(Exception $ex){
            return response()->json(["status" => "fail", "message" => $ex->getMessage()]);
        }
    }



    public function logout(Request $request){
        Auth::logout();
        return redirect('/login');
    }
}
