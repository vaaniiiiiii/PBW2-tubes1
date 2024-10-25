<?php

namespace App\Http\Controllers;
use App\Models\profil;
use Illuminate\Http\Request;

class profilController extends Controller
{
    public function index(){
        // $data = profil::all();
        return view ('profil');
    }
    public function create(){
        return view('profil');

    }

    public function store(Request $request)
    {

        profil::insert($data);
        return redirect('/profil');
    }
}
