<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PrivateHospital;

class PHController extends Controller
{
    public function insertPh(Request $request)
    {
        $request->validate([
            'ph_name' => 'required|string',
            'ph_address' => 'required|string',
        ]);

        try {
            $ph = new PrivateHospital();
            $ph->ph_name = $request['ph_name'];
            $ph->ph_address = $request['ph_address'];
            $ph->save();

            return response()->json([
                'message' => 'Insertion Successfull'
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => $th
            ]);
        }
    }
}
