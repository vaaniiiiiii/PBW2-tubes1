<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'deskripsi',
        'jumlah_penonton',
        'link_toko',
        'jumlah_suka',
        'hari_upload',
    ];
    protected $table="table_video";
    //protected $primaryKey="";
}
