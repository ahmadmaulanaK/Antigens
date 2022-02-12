<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Antigen extends Model
{
    protected $guarded = [];
    // protected $fillable = ['name,NIK,phone_number,email,jenis_kelamin'];
    public function district()
    {
        return $this->belongsTo(District::class);
    }

    public function contact()
    {
        return $this->belongsTo(Contact::class);
    }
    public function swabber()
    {
        return $this->belongsTo(Swabber::class);
    }
    public function Customer()
    {
        return $this->belongsTo(Customer::class);
    }
    public function User()
    {
        return $this->belongsTo(User::class);
    }
    public function Category()
    {
        return $this->belongsTo(Category::class);
    }
    public function cabang()
    {
        return $this->belongsTo(cabang::class);
    }
    public function Location()
    {
        return $this->belongsTo(Location::class);
    }
    public function Payment()
    {
        return $this->belongsTo(Payment::class);
    }
    public function Price()
    {
        return $this->belongsTo(Price::class);
    }
    public function Titik()
    {
        return $this->belongsTo(Titik::class);
    }
}
