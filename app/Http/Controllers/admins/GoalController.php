<?php

namespace App\Http\Controllers\admins;

use App\Goal;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Purifier;
use Image;
use Storage;
use File;

class GoalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $goals = Goal::all();

        return view('admins.goals.index')->withGoals($goals);
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
        Image::make($image)->resize(347, 300)->save($location);

        $data['image'] = $filename;

        if (Goal::create($data)) {
            session()->flash('success', 'تمت الاضافة بنجاح');

            return redirect()->route('goals.index');
        } else {
            session()->flash('error', 'حصل خطاء اثناء الأضافة');

            return redirect()->route('goals.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Goal  $goal
     * @return \Illuminate\Http\Response
     */
    public function show(Goal $goal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Goal  $goal
     * @return \Illuminate\Http\Response
     */
    public function edit(Goal $goal)
    {
        return view('admins.goals.edit')->withGoal($goal);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Goal  $goal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Goal $goal)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'image' => 'sometimes',
        ]);

        $goal->title = $request->title;
        $goal->description = $request->description;

        if($request->hasFile('image')){
            //Add the new image
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/'.$filename);
            Image::make($image)->resize(347, 355)->save($location);
            $oldFilename = $goal['image'];
            //Update the database
            $goal['image'] = $filename;
            //Delete the image
            File::delete('images/'.$oldFilename);
        }

        if ($goal->save()) {
            session()->flash('success', 'تمت الاضافة بنجاح');

            return redirect()->route('goals.index');

        } else {
            session()->flash('error', 'حصل خطاء اثناء الأضافة');

            return redirect()->route('goals.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Goal  $goal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Goal $goal)
    {
        if ($goal->delete()) {
            session()->flash('success', 'تم الحذف بنجاح');

            return redirect()->route('goals.index');
        } else {
            session()->flash('error', 'حصل خطاء اثناء الحذف');

            return redirect()->route('goals.index');
        }
    }
}
