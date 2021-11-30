<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mesyuarat extends Model
{
    use HasFactory;

    protected $table = 'tbl_mesyuarat';

    public function permohonan()
    {
        return $this->belongsTo(Permohonan::class,'permohonan_id', 'id');
    }

    public function penilaian()
    {
        return $this->hasMany(Penilaian::class,'mesyuarat_id', 'id');
    }

}
