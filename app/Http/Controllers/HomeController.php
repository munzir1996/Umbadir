<?php

namespace App\Http\Controllers;

use App\Setting;
use App\Scope;
use App\Pic;
use App\Project;
use App\Goal;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the Website.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $setting = Setting::first();
        $scopes = Scope::all();
        $pics = Pic::latest()->limit(8)->get();
        $projects = Project::latest()->limit(3)->get();
        
        return view('index')->withSetting($setting)->withScopes($scopes)->withPics($pics)->withProjects($projects);
    }

    public function about()
    {
        $setting = Setting::first();
        $projects = Project::latest()->get();

        return view('about')->withSetting($setting)->withProjects($projects);
    }

    public function contact()
    {
        $setting = Setting::first();
        return view('contact')->withSetting($setting);
    }

    public function gallery()
    {
        $pics = Pic::all();
        return view('gallery')->withPics($pics);
    }

    public function goal()
    {
        $goals = Goal::all();
        return view('goal')->withGoals($goals);
    }
    
}
