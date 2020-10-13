<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Models\Artists;
use file;

class ArtistsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artists=Artists::all();
        return view('dashboard/artists')-> with('artists', $artists);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard/Actions/Adds/addartist');
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
        'bio' => 'required',
        'picture'=>'required|image|max:2048',

    ]);//--validating
         //filehandling
       $picture=$request->file ('picture');
       $mime=$picture->getClientOriginalExtension($picture);
         //setfilename
       $picturename=str_slug($request->name).'.'.$mime;
        //dump($picture);

        //uploadingfile
       $picture_path=Storage::putFileAs('public/images/uploads/', $picture, $picturename);
        //--filehandling

        //creating new record
       $artist=new Artists;
       $artist->name=$request ->name;
       $artist->slug=str_slug($request->name);
       $artist->bio=$request->bio;
       $artist->picture='images/uploads/'.$picturename;
       $artist->save();

       $artist->slug = str_slug($request->name.' '.$artist->id, '-');
       $artist->save();
        //-creating new record

        //set success message
       $message='Artist successfully added!';

       return redirect (route('dashboard.artists'))->with('message', $message);
   }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
