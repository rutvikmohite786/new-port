<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Portfolio;
use App\Models\PortTech;

class PortfolioController extends Controller
{
    public function index(){
        $data = Portfolio::with('techport')->get();
        return view('admin.portfolio.index',compact('data'));
    }
    public function add(){
        $data = PortTech::all();
        return view('admin.portfolio.add',compact('data'));
    }
    public function store(Request $request){
        if ($request->image != null) {
              $name = time() . '.' . $request->image->extension();
              $destinationPath = 'images/portfolio';
              $request->image->move(public_path($destinationPath), $name);
              $save = new Portfolio();
              $save->image = $name;
             // $save->path = $destinationPath.'/'.$name;
              $save->title  = $request->title;
              $save->port_tech_id = $request->tech;
              $save->save();
        }
    }
    public function portfolioDetail(Request $request){
       $data = Portfolio::with('images')->where('id',$request->id)->first();
       $html = view('user.modal',compact('data'))->render();
       return response()->json([
        'html' => $html
       ]);
    }
}
