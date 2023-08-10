<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\IfCaring;
use Illuminate\Http\Request;

class IfCaringController extends Controller
{
    public function submitIfCaring(Request $request)
    {
        $validatedData = $request->validate([
            
        ]);
        $ifCaringData = IfCaring::create($validatedData);

        return response ()->json(['message' => 'Data saved succesfully',201]);
    }
}
