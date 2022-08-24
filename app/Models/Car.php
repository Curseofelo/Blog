<?php

namespace App\Models;

use App\Models\Traits\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{

    use Filterable;
    use HasFactory;

    protected $guarded =false;

    public function category()
    {
        return $this->belongsTo(CarCategory::class);
    }

    public function tags ()
    {
        return $this->belongsToMany(TagCar::class);
    }
}
