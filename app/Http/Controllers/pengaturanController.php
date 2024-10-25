<?php

namespace App\Http\Controllers;
use App\models\pengaturan;
use Illuminate\Http\Request;

class pengaturanController extends Controller
{
    
    public function index(){
        return view('pengaturan');
    }
    public function create(){
        return view('pengaturan');
    }
    public function store(Request $request){
        $data=$request->all();
        

        pengaturan::insert($data);
        return redirect('/pengaturan');


    }
}
