<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Speakers;
class SpeakersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $speakers = Speakers::all();
        return view('Backend.speakers.index')->with('speakers', $speakers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend.speakers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this -> validate($request, [
            'name' => 'required',
            'bio' => 'required',
            'image' => 'image|nullable|max:1999'
        ]);
        
        if($request->hasFile('image')){
            $filenameWithExt = $request->file('image')->getClientOriginalName();

            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            $extension = $request->file('image')->getClientOriginalExtension();

            $fileNameToStore = $filename.'_'.time().'.'.$extension;

            $path = $request->file('image')->storeAs('public/img', $fileNameToStore);

        }else{
            $fileNameToStore = 'noimage.jpg';
        }

       $speakers = new Speakers;

       $speakers->name = $request->input('name');
       $speakers->bio = $request->input('bio');
       $speakers->image = $fileNameToStore;
       $speakers->save();

       return redirect('/a_speakers')->with('success', 'speakers added successfully');
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
    public function edit($id)
    {
        $speakers = Speakers::find($id);

        return view('Backend.speakers.edit')->with('speakers', $speakers);
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
        $this -> validate($request, [
            'name' => 'required',
            'bio' => 'required',
        ]);

       $speakers = Speakers::find($id);

       $speakers->name = $request->input('name');
       $speakers->bio = $request->input('bio');
       $speakers->save();

       return redirect('/a_speakers')->with('success', 'speakers Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $speakers = Speakers::find($id);
        $speakers->delete();
        return redirect('/a_speakers')->with('success', 'speakers removed successfully');
    }
}
