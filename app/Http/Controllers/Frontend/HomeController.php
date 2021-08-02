<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Sessions;
use App\Models\Speakers;
use App\Models\Hotels;

class HomeController extends Controller
{
    public function index() {
        $speakers = Speakers::all();
        $hotels = Hotels::all();
        return view('Frontend.index')->with(['speakers'=> $speakers, 'hotels'=>$hotels]);
    }

    public function online_registtration() {
        $sessions = Sessions::all();

        $sess = Sessions::all();

        return view('Frontend.registration')->with(['sessions' => $sessions, 'sess' =>$sess]);
    }

    public function news() {
        $sessions = Sessions::all();
        return view('Frontend.news')->with(['sessions' => $sessions]);
    }


    public function single_session($id) {
        $sessions = Sessions::find($id);
        return view('Frontend.single_session')->with(['sessions' => $sessions]);
    }

    public function single_speaker($id) {
        $speaker = Speakers::find($id);
        return view('Frontend.single_speaker')->with(['speaker' => $speaker]);
    }

    public function single_hotel($id) {
        $hotel = Hotels::find($id);
        return view('Frontend.single_hotel')->with(['hotel' => $hotel]);
    }



    public function contact() {
        return view('Frontend.contact');
    }

}
