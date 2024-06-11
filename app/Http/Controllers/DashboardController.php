<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\LogActivity;
use App\Models\Notification;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Models\CancelReason;
use App\Models\OrderDetail;

class DashboardController extends Controller
{
    /**
     * dashboard page.
     *
     */
    public function dashboard()
    {
        $users = User::select(DB::raw("COUNT(*) as count"))
            ->whereYear('created_at', date('Y'))
            ->groupBy(DB::raw("Month(created_at)"))
            ->pluck('count');
        $months = User::select(DB::raw("month(created_at) as month"))
            ->whereYear('created_at', date('Y'))
            ->groupBy(DB::raw("Month(created_at)"))
            ->pluck('month');
        $data = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
        foreach ($months as $index => $month) {
            $data[$month] = $users[$index];
        }
        $userdata = (array_slice($data, 1));

        return view('dashboard.dashboard', compact('userdata'));
    }

    public function changePassword(Request $request)
    {
        $user = Auth::User()->id;
        $validator = validator($request->all(), [
            'password' => 'required',
            'password_confirmation' => 'required'
        ]);
        if ($validator->fails()) {
            return Redirect()->back()->withInput()->withErrors($validator);
        }
        if ($request->password == $request->password_confirmation) {

            $user->password = Hash::make($request['password']);
            if ($user->save()) {
                Auth::logout();
                return redirect('/login');
            } else {
                return redirect()->back()->with('error', "Password Couldn't be Updated.");
            }
        }
    }

    //Logout
    public function logout()
    {
        Session::flush();
        Auth::logout();

        return redirect('/');
    }


    //Files section
    public function Showfiles()
    {
        return view('dashboard.files.files');
    }
}
