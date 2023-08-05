<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departement extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function divisions()
    {
        return $this->hasMany(Division::class);
    }

    public function work_programs()
    {
        return $this->hasMany(WorkProgram::class);
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
