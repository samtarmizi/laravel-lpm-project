<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kokurikulum extends Model
{
    use HasFactory;

    protected $table = 'tbl_kokurikulum';

    public function permohonan()
    {
        return $this->belongsTo(Permohonan::class,'permohonan_id', 'id');
    }

}
