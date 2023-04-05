<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PortfolioImage;
use App\Models\Portfolio;

class PortfolioImageController extends Controller
{
    public function index()
    {
        $data = PortfolioImage::all();
        return view('admin.portimage.index', compact('data'));
    }
    public function add()
    {
        $data = Portfolio::all();
        return view('admin.portimage.add', compact('data'));
    }
    public function store(Request $request)
    {
        if ($request->image != null) {
            $name = time() . '.' . $request->image->extension();
            $destinationPath = 'images/portfolio';
            $request->image->move(public_path($destinationPath), $name);
            $save = new PortfolioImage();
            $save->image = $name;
            $save->portfolio_id = $request->port_id;
            $save->save();
        }
    }
}
