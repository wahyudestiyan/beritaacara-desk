<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ba extends Model
{
    use HasFactory;
    protected $fillable = [
        'instansi',
        'tanggal_ba',
        'tahun',
    ];
    
     public function datajulda(){
    return $this->hasOne(julda::class,'bas_id','id');
    }
}