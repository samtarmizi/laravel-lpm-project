<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bayaran extends Model
{
    use HasFactory;

    protected $table = 'tbl_bayaran';

    public function kaedahBayaran()
    {
        return $this->belongsTo(KaedahBayaran::class, 'kaedah_bayaran_id', 'id');
    }

    public function permohonan()
    {
        return $this->belongsTo(Permohonan::class, 'permohonan_id', 'id');
    }

}
