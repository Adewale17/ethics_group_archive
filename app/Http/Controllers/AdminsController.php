<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminsController extends Controller
{
    public function viewLogin()
    {
        return view('admins.login');
    }
    public function checkLogin(Request $request)
    {
        $remember_me = $request->has('remember_me') ? true : false;

        if (auth()->guard('admin')->attempt(['email' => $request->input("email"), 'password' => $request->input("password")], $remember_me)) {

            return redirect()->route('adminDashboard');
        }
        return redirect()->back()->with(['error' => 'error logging in']);

    }

    public function index()
    {
        return view('admins.index');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return view('admins.login');
    }
}
