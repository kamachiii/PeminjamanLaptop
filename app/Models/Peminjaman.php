<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;
    protected $table ='peminjaman';
    protected $fillable =[
        'nisn',
        'nama',
        'rombel',
        'rayon',
        'no_laptop',
        'ruangan',
        'status',
        'keterangan',
        'validator'
    ];

    public function User(){
        return $this->hasMany('App\Models\User');
    }

    public function DataLaptop(){
        return $this->belongsTo('App\Models\DataLaptop');
    }
}
