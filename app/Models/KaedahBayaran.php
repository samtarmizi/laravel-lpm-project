<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KaedahBayaran extends Model
{
    use HasFactory;

    protected $table = 'tbl_kaedah_bayaran';

    public function bayaran()
    {
        return $this->hasMany(Bayaran::class, 'kaedah_bayaran_id', 'id');
    }

}
