<?php

namespace App\Http\Controllers;

use App\Models\Admin\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
        $adminCount = Admin::select()->count();
        return view('admins.index', compact('adminCount'));
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return view('admins.login');
    }

    public function allAdmins()
    {
        $admins = Admin::select()->orderBy('id', 'desc')->get();
        return view('admins.all-admins', compact('admins'));
    }

    public function createAdmins()
    {

        return view('admins.create-admins');

    }

    public function storeAdmins(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'unique:admins', 'string'],
            'password' => ['required', 'min:8', 'string', 'confirmed'],

        ]);
        $admins = Admin::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => Hash::make($request->password),


        ]);
        if ($admins) {
            return redirect()->route('allAdmins')->with(['success' => 'Admin created Successfully']);

        }

    }
}
