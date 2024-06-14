<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animals extends Model
{
    use HasFactory;

    public function image()
    {
        return $this->belongsTo(Images::class);
    }

    public function owner()
    {
        return $this->belongsTo(Owner::class);
    }
}
