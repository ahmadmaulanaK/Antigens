<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $guarded = [];
    use HasFactory;
    public function getStatusLabelAttribute()
{
    
    if ($this->status == 0) {
        return '<span class="badge badge-secondary">Draft</span>';
    }
    return '<span class="badge badge-success">Aktif</span>';
}
public function Antigen()
    {
        return $this->hasMany(Antigen::class);
    }
}
