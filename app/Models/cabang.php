<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cabang extends Model
{
    protected $guarded = [];
    use HasFactory;

    public function Antigen()
    {
        return $this->hasMany(Antigen::class);
    }
}
