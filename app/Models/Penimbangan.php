<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penimbangan extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function anak(){
        return $this->belongsTo('App\Models\Balita', 'id_anak');
    }
}
