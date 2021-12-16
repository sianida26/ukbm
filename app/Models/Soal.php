<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soal extends Model
{
    use HasFactory;

    //has many jawaban
    public function jawabans()
    {
        return $this->hasMany('App\Models\Jawaban');
    }
}
