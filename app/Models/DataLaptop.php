<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataLaptop extends Model
{
    use HasFactory;
    protected $table ='data_laptop';
    protected $fillable =['no_laptop'];

    public function peminjaman(){
        return $this->hasMany('App\Models\Peminjaman');
    }
}
