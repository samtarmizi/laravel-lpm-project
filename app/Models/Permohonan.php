<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permohonan extends Model
{
    use HasFactory;

    protected $table = 'tbl_permohonan';

    public function perniagaan()
    {
        return $this->hasOne(Perniagaan::class, 'permohonan_id', 'id');
    }

    public function kategoriPermohonan()
    {
        return $this->belongsTo(KategoriPermohonan::class, 'kategori_permohonan_id', 'id');
    }

    public function dokumen()
    {
        return $this->hasMany(Dokumen::class, 'permohonan_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function bayaran()
    {
        return $this->hasOne(Bayaran::class, 'permohonan_id', 'id');
    }

    public function kokurikulum()
    {
        return $this->hasMany(Kokurikulum::class, 'permohonan_id', 'id');
    }

    public function peperiksaan()
    {
        return $this->hasMany(Peperiksaan::class, 'permohonan_id', 'id');
    }

    public function mesyuarat()
    {
        return $this->hasMany(Mesyuarat::class, 'permohonan_id', 'id');
    }

}
