<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Technology;
use App\Models\Service;
use App\Models\Experience;
use App\Models\PortTech;
use App\Models\Portfolio;

class HomePageController extends Controller
{
    public function index(){
        $about=About::first();
        $tech = Technology::all();
        $service = Service::all();
        $experience = Experience::all();
        $porttech = PortTech::all();
        $portfolio = Portfolio::with('techport')->get();
        return view('user.index',compact('about','tech','service','experience','porttech','portfolio'));
    }
}
