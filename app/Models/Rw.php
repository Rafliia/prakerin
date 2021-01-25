<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rw extends Model
{
    public function Desa(){
        return $this->belongsTo('App\Models\Desa','id_desa');
    }

    public function Kasus(){
        return $this->hasMany('App\Models\Kasus','id_kasus');
    }
}
