<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Genres;

class GenresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $genres=Genres::all();
        return view('dashboard/genres')-> with('genres', $genres);
        return view('dashboard/genres');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('dashboard/Actions/Adds/addgenre');
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
       //'picture'=>'required|image|max:2048',

    ]);//--validating
         //filehandling
         //$picture=$request->file ('picture');
       $genre_slug=str_slug($request->name);
         //$mime=$picture->getClientOriginalExtension($picture);
         //setfilename
        //dump($picture);

        //uploadingfile
        //$picture_path=Storage::putFileAs('public/images/uploads/', $picture, $picturename);
        //--filehandling
       
        //creating new record
       $genre=new Genres;
       $genre->name=$request ->name;
       $genre->slug=$request->name;
        //$post->picture='images/uploads'.$picturename;
       $genre->save();
        //-creating new record
       $genre->slug = str_slug($request->name.' '.$genre->id, '-');
       $genre->save();
        //set success message
       $message='Genre added successfully!';

       return redirect (route('dashboard.genres'))->with('message', $message);
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
         $thisgenre=Genres::where('slug', $slug)->first();
        return view('dashboard/Actions/Edits/editgenre')->with('thisgenre', $thisgenre);
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
        ]);
        $update=Genres::where('slug', $slug)->update([
            'name'=> $request->name,
        ]);
        $message='Genre updated successfully!';

        return redirect (route('dashboard.genres'))->with('message', $message);
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
