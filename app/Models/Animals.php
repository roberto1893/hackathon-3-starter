<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animals extends Model
{
    use HasFactory;

    public function owners()
    {
        return $this->hasMany(Owners::class);
    }

    public function images()
    {
        return $this->hasMany(Images::class);
    }
}
