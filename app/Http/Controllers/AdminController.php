<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        $adminName = $request->input('admin_name');
        $adminPassword = $request->input('admin_password');

        $admin = Admin::where('admin_name', $adminName)->first();

        if (!$admin || !password_verify($adminPassword, $admin->admin_password)) {
            return redirect()->route('login')->with('error', 'İsim veya şifre yanlış!');
        }

        return redirect()->route('index');
    }
}
