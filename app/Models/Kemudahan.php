<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kemudahan extends Model
{
    use HasFactory;

    protected $table = 'tbl_kemudahan';

    public function premis()
    {
        return $this->belongsTo(Premis::class,'premis_id', 'id');
    }

}
