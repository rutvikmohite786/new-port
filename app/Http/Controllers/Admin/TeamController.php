<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Team;

class TeamController extends Controller
{
    public function index(){
        $data = Team::all();
        return view('admin.team.index', compact('data'));  
    }
    public function add(){
        return view('admin.team.add');
    }
    public function store(Request $request){
        if ($request->image != null) {
            $name = time() . '.' . $request->image->extension();
            $destinationPath = 'images/team';
            $request->image->move(public_path($destinationPath), $name);
            $save = new Team();
            $save->image = $name;
            $save->name  = $request->name;
            $save->designation = $request->designation;
            $save->description  = $request->desc;
            $save->save();
      }
    }
}
