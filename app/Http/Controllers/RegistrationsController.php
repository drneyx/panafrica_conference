<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registrations;
class RegistrationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registrations = Registrations::all();
        return view('Backend.registrations.index')->with('registrations', $registrations);
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
        $this -> validate($request, [
            'name' => 'required',
            'status' => 'required',
            'address' => 'required',
            'affliation' => 'required',
            'sessions' => 'required',
            'conference' => 'required',
            'salutations' => 'required',
        ]);     

       $salutations = $request->input('salutations');
       $name = $request->input('name');
       $status = $request->input('status');
       $affliation= $request->input('affliation');
       $address = $request->input('address');
       $sessions = $request->input('sessions');
       $conference = $request->input('conference');
       $reg_sessions = $request->input('reg_sessions');
       $mode = $request->input('mode');
       $title = $request->input('title');
       $ptitle = $request->input('ptitle');

       $abstract = $request->input('abstract');
       $synopsis = $request->input('synopsis');


       $registrations = new Registrations();
       $registrations->salutations =$salutations;
       $registrations->name =$name;
       $registrations->status =$status;
       $registrations->affliation =$affliation;
       $registrations->address =$address;
       $registrations->sessions =$sessions;
       $registrations->conference =$conference;
       $registrations->reg_sessions =$reg_sessions;
       $registrations->mode =$mode;
       $registrations->title =$title;
       $registrations->ptitle =$ptitle;
       $registrations->abstract =$abstract;
       $registrations->synopsis =$synopsis;
       $registrations->save();
       return redirect('/online_registration')->with('success', 'Registration complited successfully');
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
        $registrations = Registrations::find($id);
        $registrations->delete();
        return redirect('/a_registrations')->with('success', 'Registrations removed successfully');
    }
}
