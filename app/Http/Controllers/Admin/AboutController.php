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
    public function store(Request $request){
       About::create([
        'title'=>$request->title,
        'description'=>$request->desc
       ]);
    }
    public function edit(){
       $data = About::first();
       return view('admin.about.edit');
    }
    public function update(){
       
    }
    public function delete(){
      
    }
}
