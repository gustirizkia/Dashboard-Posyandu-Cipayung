<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Balita extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function kematian(){
        return $this->hasMany('App\Models\Kematian', 'id_anak');
    }
}
