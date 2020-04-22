<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class StaffDetailsController extends Controller
{
    public function index()
    {
        return view('Admin.staff_details.index');
    }

    public function getUser(Request $request)
    {
        $user = DB::table('users')->where('id', $request->id)->first();
        Session::put('user', $user);
        return redirect('biography');
    }

    public function viewUser(Request $request)
    {
        $user = DB::table('users')->where('id', $request->id)->first();
        Session::put('user', $user);
        return redirect('biography');
    }
}
