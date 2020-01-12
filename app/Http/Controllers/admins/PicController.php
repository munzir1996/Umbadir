<?php

namespace App\Http\Controllers\admins;

use App\Http\Controllers\Controller;
use App\Pic;
use Illuminate\Http\Request;
use Purifier;
use Image;
use Storage;
use File;

class PicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pics = Pic::all();

        return view('admins.pics.index')->withPics($pics);
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
            'name' => 'required',
            'image' => 'required',
        ]);

        $image = $request->file('image');
        $filename = time() . '.' . $image->getClientOriginalExtension();
        $location = public_path('images/'.$filename);
        Image::make($image)->resize(338, 300)->save($location);

        $data['image'] = $filename;

        if (Pic::create($data)) {
            session()->flash('success', 'تمت الاضافة بنجاح');

            return redirect()->route('pics.index');
        } else {
            session()->flash('error', 'حصل خطاء اثناء الأضافة');

            return redirect()->route('pics.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pic  $pic
     * @return \Illuminate\Http\Response
     */
    public function show(Pic $pic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pic  $pic
     * @return \Illuminate\Http\Response
     */
    public function edit(Pic $pic)
    {
        return view('admins.pics.edit')->withPic($pic);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pic  $pic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pic $pic)
    {
        $this->validate($request, [
            'name' => 'required',
            'image' => 'sometimes',
        ]);

        $pic->name = $request->name;

        if($request->hasFile('image')){
            //Add the new image
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/'.$filename);
            Image::make($image)->resize(338, 300)->save($location);
            $oldFilename = $pic['image'];
            //Update the database
            $pic['image'] = $filename;
            //Delete the image
            File::delete('images/'.$oldFilename);
        }

        if ($pic->save()) {
            session()->flash('success', 'تمت الاضافة بنجاح');

            return redirect()->route('pics.index');

        } else {
            session()->flash('error', 'حصل خطاء اثناء الأضافة');

            return redirect()->route('pics.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pic  $pic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pic $pic)
    {
        if ($pic->delete()) {
            session()->flash('success', 'تم الحذف بنجاح');

            return redirect()->route('pics.index');
        } else {
            session()->flash('error', 'حصل خطاء اثناء الحذف');

            return redirect()->route('pics.index');
        }
    }
}
