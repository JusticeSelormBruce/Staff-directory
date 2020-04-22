<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class RegisterUserController extends Controller
{
    public function index()
    {
        $admin = Session::get('Admin');
        if ($admin == null) {
            abort('403');
        }
        return view('auth.register', compact('admin'));
    }

    public function Register()
    {
        $data = $this->validateUserDetails();
        User::create([
            'name' => $data['name'],
            'role_id' => $data['role_id'],
            'email' => strtolower($data['email']),
            'password' => Hash::make(strtolower($data['password'])),
        ]);
        return back();
    }

    public function validateUserDetails()
    {
        return request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'confirmed'],
            'role_id' => ['required', 'numeric'],
        ]);
    }
}
