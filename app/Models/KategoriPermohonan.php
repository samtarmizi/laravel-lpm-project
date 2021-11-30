<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriPermohonan extends Model
{
    use HasFactory;

    protected $table = 'tbl_kategori_permohonan';

    public function permohonan()
    {
        return $this->hasMany(Permohonan::class, 'kategori_permohonan_id', 'id');
    }

}
