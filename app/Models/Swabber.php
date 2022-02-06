<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Swabber extends Model
{
    protected $guarded = [];
    use HasFactory;
    public function antigen()
    {
        return $this->hasMany(Antigen::class);
    }
}
