<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Technology;
use App\Models\Service;

class HomePageController extends Controller
{
    public function index(){
        $about=About::first();
        $tech = Technology::all();
        $service = Service::all();
        return view('user.index',compact('about','tech','service'));
    }
}
