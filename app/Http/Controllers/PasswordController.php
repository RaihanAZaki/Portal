<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB; 
use Carbon\Carbon; 
use App\Models\Banner;
use App\Models\User; 
use Mail; 
use Hash;
use Illuminate\Support\Str;

class PasswordController extends Controller
{
    public function PasswordReset() {

        return view('auth.reset-password', [
            'banner' => Banner::all()
        ]);
    }


    public function Profile() {
        return view('admin.adm-profile', [
            'user' => User::all()
        ]);
    }

    public function ProcessProfile(Request $request) {

        if(!Hash::check($request->old_password, auth()->user()->password)) {
            return back()->with('error', 'Old Password not match');
        }

        if (empty($request->old_password)) {
            return back()->with('error', 'New password cannot be empty');
        }

        if (empty($request->new_password)) {
            return back()->with('error', 'New password cannot be empty');
        }

        if (empty($request->repeat_password)) {
            return back()->with('error', 'New password cannot be empty');
        }

        if($request->new_password != $request->repeat_password) {
            return back()->with('error', 'New password and repeat password is different');
        }

        auth()->user()->update([
            'password' => Hash::make($request->new_password),
        ]);

        return back()->with('status', 'Change Password Success');
    }
}
