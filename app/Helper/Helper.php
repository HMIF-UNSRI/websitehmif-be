<?php

namespace App\Helper;

use App\Models\Departement;
use App\Models\Division;

class Helper
{
    public static function getDepartementId($name)
    {
        $deparetement = Departement::where('name', $name)->first();
        return $deparetement->id;
    }

    public static function getDivisionId($name)
    {
        $division = Division::where('name', $name)->first();
        return $division->id;
    }
}
