<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    // $todo->attachment_url
    public function getAttachmentUrlAttribute()
    {
        return asset('storage/'.$this->attachment);
    }
}
