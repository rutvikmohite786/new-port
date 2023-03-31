<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    public function index(){
        $data = Service::all();
        return view('admin.service.index',compact('data'));
    }
    public function add(){
        return view('admin.service.add');
    }
    public function store(Request $request){
        Service::create([
            'title'=>$request->title,
            'image'=>$request->image,
            'description'=>$request->desc
        ]);
    }
}
