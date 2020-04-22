<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginUserController extends Controller
{

    public function index()
    {
        return view('auth.login');
    }

    public function LoginUser()
    {

        $data = $this->validateLoginDetails();
        $user = DB::table('users')->where('email',strtolower( $data['email']))->first();
    
        if (Hash::check(strtolower($data['password']), $user->password)) {
            if ($user->role_id == 1) {
                Session::put('user', $user);
                return redirect('Staff-Dashboard');
            }
            if ($user->role_id == 2) {
                Session::put('Admin', $user);
                return redirect('Admin-Dashboard');
            }

        }
        if (!Hash::check($data['password'], $user->password)) {
            return back();
        }

    }

    public function validateLoginDetails()
    {
        return request()->validate(
            [
                'email' => 'email|required|string',
                'password' => 'string|required'
            ]
        );
    }
}
