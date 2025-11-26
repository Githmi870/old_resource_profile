<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\WaterResource;
use \App\Models\WRHasGND;
use App\Helpers\TextNormalizer;

class WaterResourceController extends Controller
{
    public function insertWaterResource(Request $request)
    {
        try {

            // Validate request
            $validated = $request->validate([
                'wr_name' => 'required|string|max:255',
                'wr_type' => 'required|string|max:255',
                'gnd_uid' => 'required|string|max:255',
            ]);

            // Normalize Sinhala name
            $normalizedName = TextNormalizer::normalizeSinhala($validated['wr_name']);

            // Check if water resource with same normalized name + type already exists
            $existingWR = WaterResource::where('normalized_name', $normalizedName)
                ->where('wr_type', $validated['wr_type'])
                ->first();

            if ($existingWR) {

                // Check if this WR is already attached to this GND
                $existsInGND = WRHasGND::where('wr_id', $existingWR->wr_id)
                    ->where('gnd_uid', $validated['gnd_uid'])
                    ->exists();

                if ($existsInGND) {
                    return response()->json([
                        'success' => false,
                        'error' => 'Water resource already exists for this GND.'
                    ]);
                }

                // If WR exists but not linked → link it
                WRHasGND::create([
                    'wr_id' => $existingWR->wr_id,
                    'gnd_uid' => $validated['gnd_uid'],
                ]);

                return response()->json([
                    'success' => true,
                    'message' => 'Water resource linked successfully.'
                ]);
            }

            // WR does not exist → create new one
            $wr = WaterResource::create([
                'wr_name' => $validated['wr_name'],
                'wr_type' => $validated['wr_type'],
                'normalized_name' => $normalizedName,
            ]);

            // Attach to GND
            WRHasGND::create([
                'wr_id' => $wr->id,
                'gnd_uid' => $validated['gnd_uid'],
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Water resource added successfully.'
            ]);
        } catch (\Throwable $e) {
            return response()->json([
                'success' => false,
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function getWaterResources($gndUid)
    {
        // build a subquery from the pivot model
        $sub = WRHasGND::select('wr_id')->where('gnd_uid', $gndUid);

        $resources = WaterResource::whereIn('wr_id', $sub)
            ->get(['wr_id', 'wr_name', 'wr_type']);

        return response()->json($resources);
    }


    public function deleteWaterResource($id, $gndUid)
    {
        try {
            // Remove ONLY the link — do NOT delete the resource itself
            WRHasGND::where('wr_id', $id)
                ->where('gnd_uid', $gndUid)
                ->delete();

            return response()->json([
                'success' => true,
                'message' => 'Water resource unlinked from GND successfully.'
            ]);
        } catch (\Throwable $e) {

            return response()->json([
                'success' => false,
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
