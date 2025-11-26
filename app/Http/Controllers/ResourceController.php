<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Resource;
use \App\Models\RHasGND;
use \App\Helpers\TextNormalizer;

class ResourceController extends Controller
{
    public function insertResource(Request $request, $gndUid)
    {
        try {

            // Normalize
            $normalized_name = TextNormalizer::normalizeSinhala($request->r_name);

            // Validate
            $validatedData = $request->validate([
                'r_name' => 'required|string|max:255',
                'r_importance' => 'required|string|max:255',
                'r_is_used' => 'required|string|max:255',
            ]);

            // Check if the resource exists
            $existingResource = Resource::where('normalized_name', $normalized_name)->first();

            if ($existingResource) {

                // Check if this resource is already linked to this GND
                $existsInGnd = RHasGND::where('gnd_uid', $gndUid)
                    ->where('r_id', $existingResource->r_id)
                    ->exists();

                if ($existsInGnd) {
                    return response()->json(['message' => 'Resource Already Exists']);
                }

                // If resource exists but not linked → link it
                RHasGND::create([
                    'r_id' => $existingResource->r_id,
                    'gnd_uid' => $gndUid,
                    'r_importance' => $validatedData['r_importance'],
                    'r_is_used' => $validatedData['r_is_used'],
                ]);

                return response()->json(['message' => 'Resource Added Successfully']);
            }

            // If resource does NOT exist → create new
            $resource = Resource::create([
                'r_name' => $validatedData['r_name'],
                'normalized_name' => $normalized_name,
            ]);

            RHasGND::create([
                'r_id' => $resource->id,
                'gnd_uid' => $gndUid,
                'r_importance' => $validatedData['r_importance'],
                'r_is_used' => $validatedData['r_is_used'],
            ]);

            return response()->json(['message' => 'Resource Added Successfully']);
        } catch (\Throwable $th) {
            return response()->json([
                'error' => $th->getMessage()
            ], 500);
        }
    }


    public function getResources($gndUid)
    {
        $resources = Resource::join('r_has_g_n_d_s', 'resources.r_id', '=', 'r_has_g_n_d_s.r_id')
            ->where('r_has_g_n_d_s.gnd_uid', $gndUid)
            ->get([
                'resources.r_id',
                'resources.r_name',
                'r_has_g_n_d_s.r_importance',
                'r_has_g_n_d_s.r_is_used'
            ]);


        return response()->json($resources);
    }

    public function deleteResource($id, $gndUid)
    {
        try {
            // Remove only the link, not the resource itself
            RHasGND::where('r_id', $id)
                ->where('gnd_uid', $gndUid)
                ->delete();

            return response()->json([
                'success' => true,
                'message' => 'Resource unlinked from GND successfully.'
            ]);
        } catch (\Throwable $e) {
            return response()->json([
                'success' => false,
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
