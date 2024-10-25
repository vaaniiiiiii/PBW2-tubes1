<?php

namespace App\Http\Controllers;
use App\Models\video;
use Illuminate\Http\Request;

class videoController extends Controller
{
    public function index(){
        $data = video::all();
        return view ('video',compact('data'));
    }
    public function create(){
        return view('video'); 
        
    }

    public function store(Request $request)
    {
    
        video::insert($data);
        return redirect('/video');
    }
}
