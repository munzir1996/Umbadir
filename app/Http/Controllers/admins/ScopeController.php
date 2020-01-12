<?php

namespace App\Http\Controllers\admins;

use App\Http\Controllers\Controller;
use App\Scope;
use Illuminate\Http\Request;
use Purifier;
use Image;
use Storage;
use File;

class ScopeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $scopes = Scope::all();

        return view('admins.scopes.index')->withScopes($scopes);
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
        Image::make($image)->resize(352, 300)->save($location);

        $data['image'] = $filename;

        if (Scope::create($data)) {
            session()->flash('success', 'تمت الاضافة بنجاح');

            return redirect()->route('scopes.index');
        } else {
            session()->flash('error', 'حصل خطاء اثناء الأضافة');

            return redirect()->route('scopes.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Scope  $scope
     * @return \Illuminate\Http\Response
     */
    public function show(Scope $scope)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Scope  $scope
     * @return \Illuminate\Http\Response
     */
    public function edit(Scope $scope)
    {
        return view('admins.scopes.edit')->withScope($scope);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Scope  $scope
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Scope $scope)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'image' => 'sometimes',
        ]);

        $scope->title = $request->title;
        $scope->description = $request->description;

        if($request->hasFile('image')){
            //Add the new image
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/'.$filename);
            Image::make($image)->resize(352, 300)->save($location);
            $oldFilename = $scope['image'];
            //Update the database
            $scope['image'] = $filename;
            //Delete the image
            File::delete('images/'.$oldFilename);
        }

        if ($scope->save()) {
            session()->flash('success', 'تمت الاضافة بنجاح');

            return redirect()->route('scopes.index');

        } else {
            session()->flash('error', 'حصل خطاء اثناء الأضافة');

            return redirect()->route('scopes.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Scope  $scope
     * @return \Illuminate\Http\Response
     */
    public function destroy(Scope $scope)
    {
        if ($scope->delete()) {
            session()->flash('success', 'تم الحذف بنجاح');

            return redirect()->route('scopes.index');
        } else {
            session()->flash('error', 'حصل خطاء اثناء الحذف');

            return redirect()->route('scopes.index');
        }
    }
}
