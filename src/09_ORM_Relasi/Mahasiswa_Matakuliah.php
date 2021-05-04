<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Mahasiswa;
use App\Models\Matakuliah;

class Mahasiswa_Matakuliah extends Model
{
    public $timestamps= false; 
    protected $table="mahasiswa_matakuliah";
    protected $primaryKey = 'id';

    protected $fillable = [
        'mahasiswa_id',
        'matakuliah_id',
        'nilai',
    ];
}