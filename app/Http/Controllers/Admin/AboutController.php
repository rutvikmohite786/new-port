<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
       $data = About::all();
       return view('admin.about.index',compact('data'));
    }
    public function add(){
        return view('admin.about.add');
    }
    public function store(){

    }
    public function edit(){

    }
    public function update(){
       
    }
    public function delete(){
      
    }
}
