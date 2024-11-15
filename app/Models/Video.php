<?php

namespace App\Models;

<<<<<<< HEAD
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
=======
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
>>>>>>> 0e9cd92 (first commit)

class Video extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
<<<<<<< HEAD
        'deskripsi',
        'jumlah_penonton',
        'link_toko',
        'jumlah_suka',
        'hari_upload',
    ];
    protected $table="table_video";
    //protected $primaryKey="";
=======
        'thumbnail',
        'path',
        'deskripsi',    
        'link_toko',
        // 'jumlah_penonton',
        // 'jumlah_suka',
        // 'hari_upload',
    ];
    protected $table="table_video";
    //protected $primaryKey="";

    use SoftDeletes;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
>>>>>>> 0e9cd92 (first commit)
}
