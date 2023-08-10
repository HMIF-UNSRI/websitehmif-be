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
            'id' => 'required|integer',
            'email' => 'required|email',
            'full_name' => 'required|string',
            'nim' => 'required|string',
            'generation' => 'required|integer',
            'class' => 'required|string',
            'whatsapp_number' => 'required|string',
            'aspiration_form' => 'rquired|string|max:1000'
        ]);
        $ifCaringData = IfCaring::create($validatedData);

        return response ()->json(['message' => 'Data saved succesfully',201]);
    }
}
