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
            // Validate request data
            $validated = $request->validate([
                'snz_name' => 'required|string|max:255',
                'snz_importance' => 'required|string|max:255',
                'gnd_uid' => 'required|string|max:255',
            ]);

            // Normalize SNZ name
            $normalized_name = TextNormalizer::normalizeSinhala($validated['snz_name']);

            // Check if SNZ already exists globally
            $existingSnz = SensitiveNatureZone::where('normalized_name', $normalized_name)->first();

            if ($existingSnz) {

                // Check if this SNZ is already linked to this GND
                $existsInGnd = SNZHasGND::where('snz_id', $existingSnz->snz_id)
                    ->where('gnd_uid', $validated['gnd_uid'])
                    ->exists();

                if ($existsInGnd) {
                    return response()->json([
                        'success' => false,
                        'error' => 'Sensitive Nature Zone already exists for this GND.'
                    ]);
                }

                // If SNZ exists but not linked → link it
                SNZHasGND::create([
                    'snz_id' => $existingSnz->snz_id,
                    'gnd_uid' => $validated['gnd_uid'],
                ]);

                return response()->json([
                    'success' => true,
                    'message' => 'Sensitive Nature Zone linked successfully.'
                ]);
            }

            // SNZ does not exist → create new SNZ
            $snz = SensitiveNatureZone::create([
                'snz_name' => $validated['snz_name'],
                'snz_importance' => $validated['snz_importance'],
                'normalized_name' => $normalized_name,
            ]);

            // Link newly created SNZ to GND
            SNZHasGND::create([
                'snz_id' => $snz->id,
                'gnd_uid' => $validated['gnd_uid'],
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Sensitive Nature Zone added successfully.'
            ]);
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

    public function deleteSNZ($id, $gndUid)
    {
        try {
            // Remove only the link between SNZ and GND
            SNZHasGND::where('snz_id', $id)
                ->where('gnd_uid', $gndUid)
                ->delete();

            return response()->json([
                'success' => true,
                'message' => 'Sensitive Nature Zone unlinked from GND successfully.'
            ]);
        } catch (\Throwable $e) {
            return response()->json([
                'success' => false,
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
