<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Pages;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $pages=Pages::all();
        return view('dashboard/pages')-> with('pages', $pages);
        return view('dashboard/pages');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard/Actions/Adds/addpage');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
        //validating
       $validate = $request->validate([
        'name' => 'required',
        'description' => 'required',
       //'picture'=>'required|image|max:2048',

    ]);//--validating
         //filehandling
         //$picture=$request->file ('picture');
       $page_slug=str_slug($request->name);
         //$mime=$picture->getClientOriginalExtension($picture);
         //setfilename
        //dump($picture);

        //uploadingfile
        //$picture_path=Storage::putFileAs('public/images/uploads/', $picture, $picturename);
        //--filehandling
       
        //creating new record
       $page=new Pages;
       $page->name=$request ->name;
       $page->description=$request->description;
       $page->slug=$request->name;
        //$post->picture='images/uploads'.$picturename;
       $page->save();
        //-creating new record
       $page->slug = str_slug($request->name.' '.$page->id, '-');
       $page->save();
        //set success message
       $message='Posted successfully!';
       return redirect (route('dashboard.pages'))->with('message', $message);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
       
        $thispage=Pages::where('slug', $slug)->first();
        return view('dashboard/Actions/Edits/editpage')->with('thispage', $thispage);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
         $validate = $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);
        $update=Pages::where('slug', $slug)->update([
            'name'=> $request->name,
            'description'=> $request->description
        ]);
        $message='Post updated successfully!';

        return redirect (route('dashboard.pages'))->with('message', $message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
