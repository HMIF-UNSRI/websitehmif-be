<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\IfCaring;
use Illuminate\Http\Request;

class IfCaringController extends Controller
{
    /**
     * Submit If Caring
     * 
     * Endpoint ini digunakan untuk menyimpan data dari form aspirasi if caring.
     */
    public function submitIfCaring(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email',
            'full_name' => 'required',
            'nim' => 'required',
            'batch' => 'required',
            'class' => 'required',
            'whatsapp_number' => 'required',
            'aspiration_form' => 'required'
        ]);

        IfCaring::create($validatedData);

        return response()->json([
            'message' => 'Data berhasil disimpan'
        ], 201);
    }
}
