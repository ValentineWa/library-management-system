<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Posts;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts=Posts::all();
        return view('dashboard/posts')-> with('posts', $posts);
        return view('dashboard/posts');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard/Actions/Adds/addpost');
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
        'title' => 'required',
        'description' => 'required',
       //'picture'=>'required|image|max:2048',

    ]);//--validating
         //filehandling
         //$picture=$request->file ('picture');
       $post_slug=str_slug($request->title);
         //$mime=$picture->getClientOriginalExtension($picture);
         //setfilename
        //dump($picture);

        //uploadingfile
        //$picture_path=Storage::putFileAs('public/images/uploads/', $picture, $picturename);
        //--filehandling
       
        //creating new record
       $post=new Posts;
       $post->title=$request ->title;
       $post->description=$request->description;
       $post->slug=$request->title;
        //$post->picture='images/uploads'.$picturename;
       $post->save();
        //-creating new record
       $post->slug = str_slug($request->title.' '.$post->id, '-');
       $post->save();
        //set success message
       $message='Posted successfully!';

       return redirect (route('dashboard.posts'))->with('message', $message);
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
        $thispost=Posts::where('slug', $slug)->first();
        return view('dashboard/Actions/Edits/editpost')->with('thispost', $thispost);
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
            'title' => 'required',
            'description' => 'required'
        ]);
        $update=Posts::where('slug', $slug)->update([
            'title'=> $request->title,
            'description'=> $request->description
        ]);
        $message='Post updated successfully!';

        return redirect (route('dashboard.posts'))->with('message', $message);
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
