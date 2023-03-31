<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Technology;

class HomePageController extends Controller
{
    public function index(){
        $about=About::first();
        $tech = Technology::all();
        return view('user.index',compact('about','tech'));
    }
}
