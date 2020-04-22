<?php

namespace App\Http\Controllers;

use App\Achievement;
use App\Article;
use App\Associations;
use App\Award;
use App\Bio;
use App\cv;
use App\Employment;
use App\Institution;
use App\Position;
use App\Profession;
use App\Project;
use App\Publication;
use App\Qualification;
use App\Research;
use App\Specialization;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class StaffController extends Controller
{

    public function ProfileIndex()
    {
        return view('profile');
    }

    public function UpdateProfile(Request $request)
    {
        $this->validateProfilePicture();
        $loginUser = Session::get('user');
        $users = DB::table('users')->where('id', $loginUser->id);
        $this->storeImage($users);
        $user = DB::table('users')->where('id', $loginUser->id)->first();
        Session::put('user', $user);

        return back();
    }

    public function ResetPasswordIndex()
    {
        return view('auth.passwords.reset');
    }

    public function ResetPassword(Request $request)
    {
        $this->validatePassword();
        $loginUser = Session::get('user');
        $pass = Hash::make($request['password']);
        DB::table('users')->where('id', $loginUser->id)->update(['password' => $pass]);
        return redirect('biography');

    }


    public function index()
    {
        return view('staff.index');
    }

    public function BiographyIndex()
    {
        $loginUser = Session::get('user');
        $biography = DB::table('bios')->where('user_id', $loginUser->id)->first();
        return view('staff.Biography.index', compact('biography'));
    }

    public function SaveBio(Request $request)
    {
        $bio = $this->ValidateAutoBio();
        $loginUser = Session::get('user');
        Bio::create($bio + ['user_id' => $loginUser->id]);
        return back();

    }

    public function UpdateBio()
    {
        $bio = $this->ValidateAutoBio();
        $loginUser = Session::get('user');
        DB::table('bios')->where('user_id', $loginUser->id)->update($bio + ['user_id' => $loginUser->id]);
        return back();
    }


    public function AchievementsIndex()
    {
        $loginUser = Session::get('user');
        $achievements = DB::table('achievements')->where('user_id', $loginUser->id)->first();
        return view('staff.achievements.index', compact('achievements'));
    }

    public function SaveAchievements()
    {
        $loginUser = Session::get('user');
        $achievements = $this->validateRequest();
        Achievement::create($achievements + ['user_id' => $loginUser->id]);
        return back();
    }

    public function UpdateAchievements()
    {
        $achievements = $this->validateRequest();
        $loginUser = Session::get('user');
        DB::table('achievements')->where('user_id', $loginUser->id)->update($achievements + ['user_id' => $loginUser->id]);
        return back();
    }


    public function EmploymentsIndex()
    {
        $loginUser = Session::get('user');
        $employments = DB::table('employments')->where('user_id', $loginUser->id)->first();
        return view('staff.employment.index', compact('employments'));
    }

    public function SaveEmployments()
    {

        $loginUser = Session::get('user');
        $employments = $this->validateRequest();
        Employment::create($employments + ['user_id' => $loginUser->id]);
        return back();
    }

    public function UpdateEmployments()
    {
        $employments = $this->validateRequest();
        $loginUser = Session::get('user');
        DB::table('employments')->where('user_id', $loginUser->id)->update($employments + ['user_id' => $loginUser->id]);
        return back();
    }

    public function QualificationsIndex()
    {
        $loginUser = Session::get('user');
        $qualifications = DB::table('qualifications')->where('user_id', $loginUser->id)->first();
        return view('staff.Qualification.index', compact('qualifications'));
    }


    public function SaveQualifications()
    {
        $loginUser = Session::get('user');
        $qualification = $this->validateRequest();
        Qualification::create($qualification + ['user_id' => $loginUser->id]);
        return back();
    }

    public function UpdateQualifications()
    {
        $qualification = $this->validateRequest();
        $loginUser = Session::get('user');
        DB::table('qualifications')->where('user_id', $loginUser->id)->update($qualification + ['user_id' => $loginUser->id]);
        return back();
    }


    public function SpecializationIndex()
    {
        $loginUser = Session::get('user');
        $specialization = DB::table('specializations')->where('user_id', $loginUser->id)->first();
        return view('staff.Specializations.index', compact('specialization'));
    }


    public function SaveSpecialization()
    {
        $loginUser = Session::get('user');
        $specialization = $this->validateRequest();
        Specialization::create($specialization + ['user_id' => $loginUser->id]);
        return back();
    }

    public function UpdateSpecialization()
    {
        $specialization = $this->validateRequest();
        $loginUser = Session::get('user');
        DB::table('specializations')->where('user_id', $loginUser->id)->update($specialization + ['user_id' => $loginUser->id]);
        return back();
    }

    public function Research_InterestIndex()
    {
        $loginUser = Session::get('user');
        $research_interest = DB::table('researches')->where('user_id', $loginUser->id)->first();
        return view('staff.Research_Interest.index', compact('research_interest'));
    }


    public function SaveResearchInterest()
    {
        $loginUser = Session::get('user');
        $research_interest = $this->validateRequest();
        Research::create($research_interest + ['user_id' => $loginUser->id]);
        return back();
    }

    public function UpdateResearchInterest()
    {
        $research_interest = $this->validateRequest();
        $loginUser = Session::get('user');
        DB::table('researches')->where('user_id', $loginUser->id)->update($research_interest + ['user_id' => $loginUser->id]);
        return back();
    }

    public function InstitutionsIndex()
    {
        $loginUser = Session::get('user');
        $institution = DB::table('institutions')->where('user_id', $loginUser->id)->first();
        return view('staff.Institution.index', compact('institution'));
    }

    public function SaveInstitutions()
    {

        $loginUser = Session::get('user');
        $institution = $this->validateRequest();
        Institution::create($institution + ['user_id' => $loginUser->id]);
        return back();
    }

    public function UpdateInstitutions()
    {
        $institution = $this->validateRequest();
        $loginUser = Session::get('user');
        DB::table('institutions')->where('user_id', $loginUser->id)->update($institution + ['user_id' => $loginUser->id]);
        return back();
    }

    public function PositionsIndex()
    {
        $loginUser = Session::get('user');
        $position = DB::table('positions')->where('user_id', $loginUser->id)->first();
        return view('staff.Position.index', compact('position'));
    }

    public function SavePositions()
    {

        $loginUser = Session::get('user');
        $position = $this->validateRequest();
        Position::create($position + ['user_id' => $loginUser->id]);
        return back();
    }

    public function UpdatePositions()
    {
        $position = $this->validateRequest();
        $loginUser = Session::get('user');
        DB::table('positions')->where('user_id', $loginUser->id)->update($position + ['user_id' => $loginUser->id]);
        return back();
    }


    public function ProfessionIndex()
    {
        $loginUser = Session::get('user');
        $professions = DB::table('professions')->where('user_id', $loginUser->id)->first();
        return view('staff.Profession.index', compact('professions'));
    }

    public function SaveProfession()
    {

        $loginUser = Session::get('user');
        $profession = $this->validateRequest();
        Profession::create($profession + ['user_id' => $loginUser->id]);
        return back();
    }

    public function UpdateProfession()
    {
        $profession = $this->validateRequest();
        $loginUser = Session::get('user');
        DB::table('professions')->where('user_id', $loginUser->id)->update($profession + ['user_id' => $loginUser->id]);
        return back();
    }

    public function ProjectIndex()
    {
        $loginUser = Session::get('user');
        $projects = DB::table('projects')->where('user_id', $loginUser->id)->first();
        return view('staff.Projects.index', compact('projects'));
    }

    public function SaveProject()
    {

        $loginUser = Session::get('user');
        $projects = $this->validateRequest();
        Project::create($projects + ['user_id' => $loginUser->id]);
        return back();
    }

    public function UpdateProject()
    {
        $projects = $this->validateRequest();
        $loginUser = Session::get('user');
        DB::table('projects')->where('user_id', $loginUser->id)->update($projects + ['user_id' => $loginUser->id]);
        return back();
    }

    public function AssociationIndex()
    {
        $loginUser = Session::get('user');
        $associations = DB::table('associations')->where('user_id', $loginUser->id)->first();
        return view('staff.Association.index', compact('associations'));
    }

    public function SaveAssociation()
    {

        $loginUser = Session::get('user');
        $associations = $this->validateRequest();
        Associations::create($associations + ['user_id' => $loginUser->id]);
        return back();
    }

    public function UpdateAssociation()
    {
        $associations = $this->validateRequest();
        $loginUser = Session::get('user');
        DB::table('associations')->where('user_id', $loginUser->id)->update($associations + ['user_id' => $loginUser->id]);
        return back();
    }

    public function ArticleIndex()
    {
        $loginUser = Session::get('user');
        $articles = DB::table('articles')->where('user_id', $loginUser->id)->first();
        return view('staff.Articles.index', compact('articles'));
    }

    public function SaveArticles()
    {

        $loginUser = Session::get('user');
        $articles = $this->validateRequest();
        Article::create($articles + ['user_id' => $loginUser->id]);
        return back();
    }

    public function UpdateArticles()
    {
        $articles = $this->validateRequest();
        $loginUser = Session::get('user');
        DB::table('articles')->where('user_id', $loginUser->id)->update($articles + ['user_id' => $loginUser->id]);
        return back();
    }

    public function PublicationsIndex()
    {
        $loginUser = Session::get('user');
        $publication = DB::table('publications')->where('user_id', $loginUser->id)->first();
        return view('staff.Publication.index', compact('publication'));
    }

    public function SavePublications()
    {

        $loginUser = Session::get('user');
        $publication = $this->validateRequest();
        Publication::create($publication + ['user_id' => $loginUser->id]);
        return back();
    }

    public function UpdatePublications()
    {
        $publication = $this->validateRequest();
        $loginUser = Session::get('user');
        DB::table('publications')->where('user_id', $loginUser->id)->update($publication + ['user_id' => $loginUser->id]);
        return back();
    }

    public function AwardsIndex()
    {
        $loginUser = Session::get('user');
        $awards = DB::table('awards')->where('user_id', $loginUser->id)->first();
        return view('staff.Award.index', compact('awards'));
    }

    public function SaveAwards()
    {

        $loginUser = Session::get('user');
        $awards = $this->validateRequest();
        Award::create($awards + ['user_id' => $loginUser->id]);
        return back();
    }

    public function UpdateAwards()
    {
        $awards = $this->validateRequest();
        $loginUser = Session::get('user');
        DB::table('awards')->where('user_id', $loginUser->id)->update($awards + ['user_id' => $loginUser->id]);
        return back();
    }

    public function CVIndex()
    {
        $loginUser = Session::get('user');
        $cv = DB::table('cvs')->where('user_id', $loginUser->id)->first();
        return view('staff.CV.index', compact('cv'));
    }

    public function SaveCV()
    {

        $loginUser = Session::get('user');
        $cv = $this->validateCVDetails();
        $mycv = cv::create($cv + ['user_id' => $loginUser->id]);
        $this->storeCV($mycv);
        return back();
    }


    public function Updatecv()
    {
        $this->validateCVDetails();
        $loginUser = Session::get('user');
        $cvs = DB::table('cvs')->where('user_id', $loginUser->id);
        $this->storeCV($cvs);
        $user = DB::table('users')->where('id', $loginUser->id)->first();
        Session::put('user', $user);
        return back();
    }

    public function ValidateAutoBio()
    {

        return request()->validate([
            'position' => 'required',
            'interest' => 'required',
            'office' => 'required',
            'description' => 'required',
            'department_id' => 'required'
        ]);
    }

    public function validateRequest()
    {
        return request()->validate([
            'description' => 'required'
        ]);
    }

    public function validateProfilePicture()
    {
        return tap(
            request()->validate(
                [
                    'avatar' => 'required'
                ]
            ),
            function () {
                if (request()->hasFile('avatar')) {
                    request()->validate(
                        [
                            'avatar' => 'file|image|max:10000'
                        ]
                    );
                }
            }
        );
    }

    public function storeImage($avatar)
    {

        if (request()->has('avatar')) {
            $avatar->update(
                [
                    'avatar' => request()->avatar->store('avatars', 'public')
                ]

            );
        }
    }

    public function validatePassword()
    {
        return request()->validate(
            [

                'email' => ['required', 'string', 'email', 'max:255'],
                'password' => ['required', 'string', 'confirmed'],
            ]
        );
    }

    public function validateCVDetails()
    {


        return tap(
            request()->validate(
                [

                    'cv' => 'required'
                ]
            ),
            function () {
                if (request()->hasFile('cv')) {
                    request()->validate(
                        [
                            'cv' => 'mimes:pdf| max:10000'
                        ]
                    );
                }
            }
        );
    }

    public function storeCV($cv)
    {

        if (request()->has('cv')) {
            $cv->update(
                [
                    'cv' => request()->cv->store('CV', 'public')
                ]

            );
        }
    }

}
