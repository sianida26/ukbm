<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{

    /**
     * id: unsigned bigint(20), primary key, auto increment
     * name: varchar(255)
     * created_at: timestamp, nullable
     * modified_at: timestamp, nullable
     */
    use HasFactory;

    protected $guarded = [];

    //has many siswa
    public function siswa()
    {
        return $this->hasMany(Siswa::class);
    }
}
