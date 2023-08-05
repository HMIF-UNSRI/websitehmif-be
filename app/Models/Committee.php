<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Committee extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function departement()
    {
        return $this->belongsTo(Departement::class);
    }

    public function division()
    {
        return $this->belongsTo(Division::class);
    }
}
