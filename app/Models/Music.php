<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
    use HasFactory;
    protected $guarded = false;

    public function category()
    {
        return $this->belongsTo(MusicCategory::class);
    }

    public function tags ()
    {
        return $this->belongsToMany(MusicTag::class);
    }
}
