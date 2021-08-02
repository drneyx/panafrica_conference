<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sessions;
class SessionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sessions = Sessions::all();
        return view('Backend.sessions.index')->with('sessions', $sessions);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend.sessions.create');
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
            'title' => 'required',
            'organizer' => 'required',
            'delivery' => 'required',
            'nature' => 'required',
            'abstract' => 'required', 
        ]);     

       $sessions = new Sessions;
       $sessions->title = $request->input('title');
       $sessions->organizer = $request->input('organizer');
       $sessions->delivery = $request->input('delivery');
       $sessions->nature = $request->input('nature');
       $sessions->abstract = $request->input('abstract');
       $sessions->save();
       return redirect('/a_sessions')->with('success', 'session added successfully');
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
        $sessions = Sessions::find($id);

        return view('Backend.sessions.edit')->with('sessions', $sessions);
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
            'title' => 'required',
            'organizer' => 'required',
            'delivery' => 'required',
            'nature' => 'required',
            'abstract' => 'required', 
        ]);     

       $sessions = Sessions::find($id);
       $sessions->title = $request->input('title');
       $sessions->organizer = $request->input('organizer');
       $sessions->delivery = $request->input('delivery');
       $sessions->nature = $request->input('nature');
       $sessions->abstract = $request->input('abstract');
       $sessions->save();
       return redirect('/a_sessions')->with('success', 'session Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sessions =     Sessions::find($id);
        $sessions->delete();
        return redirect('/a_sessions')->with('success', 'session removed successfully');
    }
}
