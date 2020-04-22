<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function index()
    {

        return view('Admin.index');
    }

    public function createUserAccount()
    {
        return view('auth.register');
    }

    public function AccountReset()
    {
        return view('Admin.reset_account');
    }

    public function ResetAccount(Request $request)
    {
        $defaultPassword = Hash::make('password');
        $user = DB::table('users')->where('id', $request->user_id)->update(['password' => $defaultPassword]);
        return back();

    }

    public function NewIndex()
    {
        return view('Admin.news_index');
    }


    public function WriteNews()
    {
        $news = News::create($this->validateStory());
        $this->storeImage($news);
        return back();
    }

    public function UpdateNews(Request $request)
    {

        $news = $this->validateStory();
        DB::table('news')->where('id', $request->id)->update($news);
        return back();
    }

    public function validateStory()
    {


        return tap(
            request()->validate(
                [
                    'title' => 'required',
                    'message' => 'required',

                ]
            ),
            function () {
                if (request()->hasFile('image')) {
                    request()->validate(
                        [
                            'image' => 'file|image|max:10000'
                        ]
                    );
                }
            }
        );
    }

    public function storeImage($news)
    {

        if (request()->has('image')) {
            $news->update(
                [
                    'image' => request()->image->store('News', 'public')
                ]

            );
        }
    }
}
