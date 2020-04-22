<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class MoreController extends Controller
{
    public function index(Request $request)
    {
        Session::put('key', $request->id);
        $thisUser = DB::table('users')->where('id', $request->id)->first();
        $userBio = DB::table('bios')->where('user_id', $request->id)->first();
        if($request->has($request->ids)){
        $check = $userBio = DB::table('bios')->where('user_id', $request->ids)->first();
        if ($check == null) {
            abort('404');
        } else {
            $thisUser = DB::table('users')->where('id', $request->ids)->first();
            $userBio = DB::table('bios')->where('user_id', $request->ids)->first();
        }}
        else{
            abort('404');
        }
        $key = Session::get('key');
        return view('more.index', compact('thisUser', 'userBio', 'key'));
    }

    public function index_achievement()
    {
        $key = Session::get('key');
        $userBio = DB::table('achievements')->where('user_id', $key)->first();
        return view('more.index_achievement', compact('userBio'));
    }

    public function index_articles()
    {
        $key = Session::get('key');
        $userBio = DB::table('articles')->where('user_id', $key)->first();
        return view('more.index_articles', compact('userBio'));
    }

    public function index_associations()
    {
        $key = Session::get('key');
        $userBio = DB::table('associations')->where('user_id', $key)->first();
        return view('more.index_associations', compact('userBio'));
    }

    public function index_awards()
    {
        $key = Session::get('key');
        $userBio = DB::table('awards')->where('user_id', $key)->first();
        return view('more.index_awards', compact('userBio'));
    }

    public function index_cv()
    {
        $key = Session::get('key');
        $userBio = DB::table('cvs')->where('user_id', $key)->first();
        return view('more.index_cv', compact('userBio'));
    }

    public function index_employments()
    {
        $key = Session::get('key');
        $userBio = DB::table('employments')->where('user_id', $key)->first();
        return view('more.index_employments', compact('userBio'));
    }

    public function index_institution()
    {
        $key = Session::get('key');
        $userBio = DB::table('institutions')->where('user_id', $key)->first();
        return view('more.index_institution', compact('userBio'));
    }

    public function index_position()
    {
        $key = Session::get('key');
        $userBio = DB::table('positions')->where('user_id', $key)->first();
        return view('more.index_position', compact('userBio'));
    }

    public function index_profession()
    {
        $key = Session::get('key');
        $userBio = DB::table('professions')->where('user_id', $key)->first();
        return view('more.index_profession', compact('userBio'));
    }

    public function index_projects()
    {
        $key = Session::get('key');
        $userBio = DB::table('projects')->where('user_id', $key)->first();
        return view('more.index_projects', compact('userBio'));
    }

    public function index_publications()
    {
        $key = Session::get('key');
        $userBio = DB::table('publications')->where('user_id', $key)->first();
        return view('more.index_publications', compact('userBio'));
    }

    public function index_qualifications()
    {
        $key = Session::get('key');
        $userBio = DB::table('qualifications')->where('user_id', $key)->first();
        return view('more.index_qualifications', compact('userBio'));
    }

    public function index_research()
    {
        $key = Session::get('key');
        $userBio = DB::table('researches')->where('user_id', $key)->first();
        return view('more.index_research', compact('userBio'));
    }

    public function index_specialization()
    {
        $key = Session::get('key');
        $userBio = DB::table('specializations')->where('user_id', $key)->first();
        return view('more.index_specialization', compact('userBio'));
    }

    public function post(Request $request)
    {
        $searchValue = $request->get('search');
        $getSearchResult = DB::table('users')->where('name', 'Like', '%' . $searchValue . '%')->paginate(5);
        $check = $getSearchResult->total();
        abort_if($searchValue === null, 404);
        return view('common.search', compact('getSearchResult', 'check'));
    }

}
