<?php

namespace App\Http\Controllers;
<<<<<<< HEAD
use App\models\pengaturan;
use Illuminate\Http\Request;
=======
use App\Models\User;
use App\models\pengaturan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
>>>>>>> 0e9cd92 (first commit)

class pengaturanController extends Controller
{
    
    public function index(){
        return view('pengaturan');
    }
<<<<<<< HEAD
    public function create(){
        return view('pengaturan');
    }
    public function store(Request $request){
        $data=$request->all();
        

        pengaturan::insert($data);
        return redirect('/pengaturan');


=======
    public function delete(Request $request)
    {
        $user = User::find(Auth::id());
        if ($user) {
            // Soft delete video yang terkait dengan user
            $user->videos()->delete();  // Soft delete video
    
            // Soft delete user
            $user->delete();  // Soft delete user
        }
    
        return redirect()->route('beranda'); // Redirect after deletion
>>>>>>> 0e9cd92 (first commit)
    }
}
