<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jawaban extends Model
{
    use HasFactory;

    protected $guarded = [];

    //belongsTo user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //belongsTo soal
    public function soal()
    {
        return $this->belongsTo(Soal::class);
    }
}
