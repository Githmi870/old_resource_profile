<?php

namespace App\Http\Controllers;

use App\Models\SafetyPlace;
use App\Models\SPHasGND;
use Illuminate\Http\Request;

class SPController extends Controller
{
    public function getSP($gndUid)
    {
        return response()->json(
            SafetyPlace::whereIn('sp_id', SPHasGND::where('gnd_uid', $gndUid)->pluck('sp_id'))->get()
        );
    }

    public function insertSP(Request $request, $gndUid)
    {
        $request->validate([
            'sp_name' => 'required|string',
            'sp_address' => 'required|string',
            'gnd_uid' => 'required|string',
        ]);

        try {
            $sp = SafetyPlace::create([
                'sp_name' => $request['sp_name'],
                'sp_address' => $request['sp_address'],
            ]);

            $sp->sp_id = $sp->id;

            SPHasGND::create([
                'sp_id' => $sp->sp_id,
                'gnd_uid' => $gndUid,
            ]);

            return response()->json([
                'message' => 'Successful'
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => 'Failed' . $th
            ]);
        }
    }

    public function deleteSP($id, $gndUid)
    {
        try {
            // Remove ONLY the link — do NOT delete the resource itself
            SPHasGND::where('sp_id', $id)
                ->where('gnd_uid', $gndUid)
                ->delete();

            return response()->json([
                'success' => true,
                'message' => 'Safety Place unlinked from GND successfully.'
            ]);
        } catch (\Throwable $e) {

            return response()->json([
                'success' => false,
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
