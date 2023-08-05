<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function departement()
    {
        return $this->belongsTo(Departement::class);
    }

    public function committees()
    {
        return $this->hasMany(Committee::class);
    }

    public function staffs()
    {
        return $this->hasMany(Staff::class);
    }
}
