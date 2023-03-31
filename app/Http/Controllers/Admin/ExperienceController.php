<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Experience;

class ExperienceController extends Controller
{
    public function index(){
        $data = Experience::all();
        return view('admin.experience.index',compact('data'));
    }
    public function add(){

    }
    public function store(){

    }
}
