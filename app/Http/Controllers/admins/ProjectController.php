<?php

namespace App\Http\Controllers\admins;

use App\Http\Controllers\Controller;
use App\Project;
use Illuminate\Http\Request;
use Purifier;
use Image;
use Storage;
use File;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();

        return view('admins.projects.index')->withProjects($projects);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'image' => 'required',
        ]);

        $image = $request->file('image');
        $filename = time() . '.' . $image->getClientOriginalExtension();
        $location = public_path('images/'.$filename);
        Image::make($image)->resize(347, 270)->save($location);

        $data['image'] = $filename;

        if (Project::create($data)) {
            session()->flash('success', 'تمت الاضافة بنجاح');

            return redirect()->route('projects.index');
        } else {
            session()->flash('error', 'حصل خطاء اثناء الأضافة');

            return redirect()->route('projects.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        return view('admins.projects.edit')->withProject($project);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'image' => 'sometimes',
        ]);

        $project->title = $request->title;
        $project->description = $request->description;

        if($request->hasFile('image')){
            //Add the new image
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/'.$filename);
            Image::make($image)->resize(347, 270)->save($location);
            $oldFilename = $project['image'];
            //Update the database
            $project['image'] = $filename;
            //Delete the image
            File::delete('images/'.$oldFilename);
        }

        if ($project->save()) {
            session()->flash('success', 'تمت الاضافة بنجاح');

            return redirect()->route('projects.index');

        } else {
            session()->flash('error', 'حصل خطاء اثناء الأضافة');

            return redirect()->route('projects.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        if ($project->delete()) {
            session()->flash('success', 'تم الحذف بنجاح');

            return redirect()->route('projects.index');
        } else {
            session()->flash('error', 'حصل خطاء اثناء الحذف');

            return redirect()->route('projects.index');
        }
    }
}
