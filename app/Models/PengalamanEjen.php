<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengalamanEjen extends Model
{
    use HasFactory;

    protected $table = 'tbl_pengalaman_ejen';

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

}
