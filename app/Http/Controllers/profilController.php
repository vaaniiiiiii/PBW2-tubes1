<?php

namespace App\Http\Controllers;
<<<<<<< HEAD
use App\Models\profil;
use Illuminate\Http\Request;
=======
use App\Models\Video;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
>>>>>>> 0e9cd92 (first commit)

class profilController extends Controller
{
    public function index(){
<<<<<<< HEAD
        // $data = profil::all();
        return view ('profil');
=======
        $videos = Video::get();
        return view ('profil', ['videos' => $videos]);
>>>>>>> 0e9cd92 (first commit)
    }
    public function create(){
        return view('profil');

    }

<<<<<<< HEAD
    public function store(Request $request)
    {

        profil::insert($data);
        return redirect('/profil');
    }
=======
    public function show()
    {
        return view('editProfil', ['user' => Auth::user()]);
    }


public function update(Request $request)
{
    // Mengambil data pengguna yang sedang login berdasarkan ID
    $user = User::find(Auth::id());  // Lebih eksplisit menggunakan find()

    // Pastikan pengguna ditemukan
    if (!$user) {
        return redirect()->route('profile.show')->with('error', 'Pengguna tidak ditemukan');
    }

    // Validasi input
    $request->validate([
        'username' => 'required|string|max:255',
        'bio' => 'nullable|string|max:500',
        'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Ukuran max 2MB
    ]);

    // Mengupdate username dan bio
    $user->username = $request->input('username');
    $user->bio = $request->input('bio');

    // Mengupdate avatar jika ada file baru yang diunggah
    if ($request->hasFile('avatar')) {
        // Hapus avatar lama jika ada
        if ($user->avatar) {
            $existingAvatarPath = public_path('storage/avatar/' . $user->avatar);
            if (file_exists($existingAvatarPath)) {
                unlink($existingAvatarPath); // Hapus file avatar lama
            }
        }

        // Menyimpan file avatar baru
        $avatarPath = null;
        $avatar = $request->file('avatar');
        $avatarPath = 'storage/avatar/' . $avatar->getClientOriginalName(); // Nama file unik
        $avatar->move(public_path('storage/avatar'), $avatar->getClientOriginalName()); // Pindahkan file ke folder public/storage/avatar


        // Simpan nama file di database
        $user->avatar = $avatarPath;
    }

    // Simpan perubahan di database
    $user->save();

    // Redirect dengan pesan sukses
    return redirect()->route('profile.show')->with('success', 'Profil berhasil diperbarui');
}

    
>>>>>>> 0e9cd92 (first commit)
}
