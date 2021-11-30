<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Premis extends Model
{
    use HasFactory;

    protected $table = 'tbl_premis';

    public function perniagaan()
    {
        return $this->belongsTo( Perniagaan::class,'perniagaan_id', 'id');
    }

    public function pusat()
    {
        return $this->hasMany( Pusat::class,'premis_id', 'id');
    }

    public function kemudahan()
    {
        return $this->hasMany( Kemudahan::class,'premis_id', 'id');
    }



}
