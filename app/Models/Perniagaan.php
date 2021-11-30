<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perniagaan extends Model
{
    use HasFactory;

    protected $table = 'tbl_perniagaan';

    public function permohonan()
    {
        return $this->belongsTo(Permohonan::class, 'permohonan_id', 'id');
    }

    public function premis()
    {
        return $this->hasMany(Premis::class, 'perniagaan_id', 'id');
    }



}
