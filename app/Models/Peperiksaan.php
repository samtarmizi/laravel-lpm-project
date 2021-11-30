<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peperiksaan extends Model
{
    use HasFactory;

    protected $table = 'tbl_peperiksaan';

    public function permohonan()
    {
        return $this->belongsTo(Permohonan::class,'permohonan_id', 'id');
    }

}
