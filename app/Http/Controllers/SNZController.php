<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SensitiveNatureZone;
use App\Models\SNZHasGND;
use App\Helpers\TextNormalizer;

class SNZController extends Controller
{
    public function insertSNZ(Request $request)
    {
        try {
            $request->validate([
                'snz_name' => 'required|string|max:255',
                'snz_importance' => 'required|string|max:255',
            ]);

            $normalized_name = TextNormalizer::normalizeSinhala($request->snz_name);

            $existing_snz = SensitiveNatureZone::where('normalized_name', $normalized_name)->first();
            if ($existing_snz) {
                return response()->json([
                    'success' => false,
                    'error' => 'Sensitive Nature Zone already exists.'
                ]);
            } else {
                $snz = new SensitiveNatureZone();
                $snz->snz_name = $request->snz_name;
                $snz->snz_importance = $request->snz_importance;
                $snz->normalized_name = $normalized_name;
                $snz->save();

                $snzgnd = new SNZHasGND();
                $snzgnd->snz_id = $snz->id;
                $snzgnd->gnd_uid = $request->gnd_uid;
                $snzgnd->save();

                return response()->json([
                    'success' => true,
                    'message' => 'Sensitive Nature Zone added successfully.'
                ]);
            }
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'error' => $e->getMessage()
            ]);
        }
    }

    public function getSNZ($gndUid)
    {
        return response()->json(
            SensitiveNatureZone::whereIn('snz_id', SNZHasGND::where('gnd_uid', $gndUid)->pluck('snz_id'))->get()
        );
    }

    public function deleteSNZ($id)
    {
        return response()->json(
            SensitiveNatureZone::where('snz_id', $id)->delete()
        );
    }
}
