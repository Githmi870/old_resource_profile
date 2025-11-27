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

    public function getND($gndUid)
    {
        return response()->json(
            NaturalDisaster::select('natural_disasters.nd_id','natural_disasters.nd_name', 'n_d_has_g_n_d_s.nd_period', 'n_d_has_g_n_d_s.nd_solution')
                ->join('n_d_has_g_n_d_s', 'natural_disasters.nd_id', '=', 'n_d_has_g_n_d_s.nd_id')
                ->where('n_d_has_g_n_d_s.gnd_uid', $gndUid)
                ->get()
        );
    }

    public function deleteND($id, $gndUid)
    {
        try {
            // Remove only the link between nd and GND
            NDHasGND::where('nd_id', $id)
                ->where('gnd_uid', $gndUid)
                ->delete();

            return response()->json([
                'success' => true,
                'message' => 'Natural Disaster unlinked from GND successfully.'
            ]);
        } catch (\Throwable $e) {
            return response()->json([
                'success' => false,
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
