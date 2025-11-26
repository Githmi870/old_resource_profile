<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\NaturalDisaster;
use \App\Models\NDHasGND;

use function Laravel\Prompts\alert;

class NDController extends Controller
{
    public function getNDList()
    {
        return response()->json(
            NaturalDisaster::all()
        );
    }

    public function insertND(Request $request)
    {
        $validatedData = $request->validate([
            'nd_name'    => 'required|string',
            'nd_period'  => 'required|string',
            'suggestion' => 'required|string',
            'other_nd'   => 'nullable|string',
            'gnd_uid'    => 'required|string'
        ]);

        if (!empty($validatedData['other_nd'] ?? null)) {
            // Create new NaturalDisaster record
            $nd = NaturalDisaster::create([
                'nd_name'    => $validatedData['other_nd'],
            ]);

            // Use $nd->id directly
            NDHasGND::create([
                'nd_id'      => $nd->id,
                'gnd_uid'    => $validatedData['gnd_uid'],
                'nd_period'  => $validatedData['nd_period'],
                'nd_solution' => $validatedData['suggestion'],
            ]);
        } else {
            // Get existing disaster ID
            $ndId = NaturalDisaster::where('nd_name', $validatedData['nd_name'])
                ->value('nd_id');

            NDHasGND::create([
                'nd_id'   => $ndId,
                'gnd_uid' => $validatedData['gnd_uid'],
                'nd_period'  => $validatedData['nd_period'],
                'nd_solution' => $validatedData['suggestion'],
            ]);
        }

        return response()->json([
            'success' => true,
            'message' => 'Successful'
        ]);
    }
}
