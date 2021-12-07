<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{

    /**
     * id: unsigned bigint(20), primary key, auto increment
     * user_id: bigint(20), foreign key:users, index
     * kelas_id: bigint(20), foreign key:kelas, index
     * created_at: timestamp, nullable
     * modified_at: timestamp, nullable
     */

    use HasFactory;

    protected $guarded = [];

    //belongsTo kelas
    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }

    //belongsTo user
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
