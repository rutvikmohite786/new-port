<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PortTech;

class PortTechController extends Controller
{
    public function index(){
        $data = PortTech::all();
        return view('admin.porttech.index',compact('data'));
    }
    public function add(){
        return view('admin.porttech.add');
    }
    public function store(Request $request){
        PortTech::create([
          'name'=>$request->name
        ]);
    }
    public function edit($id){
      $data = PortTech::find($id);
      return view('admin.porttech.edit',compact('data'));
    }
    public function update(Request $request){
       PortTech::where('id',$request->id)->update([
          'name'=>$request->name
       ]);
    }
}
