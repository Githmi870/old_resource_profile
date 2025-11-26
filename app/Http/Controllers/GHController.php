<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GovernmentHospital;

use function Laravel\Prompts\error;

class GHController extends Controller
{
    public function insertGH(Request $request){
        $validatedData = $request->validate([
            'gh_name' => 'required',
            'gh_type' => 'required',
        ]);

        // Use the validated data array directly
        GovernmentHospital::insert([
            'gh_name' => $validatedData['gh_name'],
            'gh_type' => $validatedData['gh_type'],
        ]); 

        return response()->json([
            'message' => 'Successfully inserted hospital'
        ]);

    }

    public function getGH(){
       return response()->json( GovernmentHospital::all());
    }
}
