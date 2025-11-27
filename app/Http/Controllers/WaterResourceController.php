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
        $validatedData = $request->validate([
            'wr_name' => 'required|string|max:255',
            'wr_type' => 'required|string|max:255',
            'gnd_uid' => 'required|string|max:255',
        ]);

        $normalized = TextNormalizer::normalizeSinhala($validatedData['wr_name']);

        $waterResource = WaterResource::where('normalized_name', $normalized)
            ->where('wr_type', $validatedData['wr_type'])
            ->first();

        if (!$waterResource) {
            $waterResource = new WaterResource();
            $waterResource->wr_name = $validatedData['wr_name'];
            $waterResource->wr_type = $validatedData['wr_type'];
            $waterResource->normalized_name = $normalized;
            $waterResource->save();
            $waterResource->wr_id = $waterResource->id; // Ensure wr_id is set
        }


        $exists = WRHasGND::where('wr_id', $waterResource->wr_id)
            ->where('gnd_uid', $validatedData['gnd_uid'])
            ->exists();

        if (!$exists) {
            $wrHasGND = new WRHasGND();
            $wrHasGND->wr_id = $waterResource->wr_id;
            $wrHasGND->gnd_uid = $validatedData['gnd_uid'];
            $wrHasGND->save();
        }

        return response()->json(['success' => true]);
    }


    public function getWaterResources($gndUid)
    {
        return response()->json(WaterResource::whereIn('wr_id', function ($query) use ($gndUid) {
            $query->select('wr_id')
                ->from('w_r_has_g_n_d_s')
                ->where('gnd_uid', $gndUid);
        })->get(['wr_id', 'wr_name', 'wr_type']));
    }

    public function deleteWaterResource($id)
    {
        return response()->json(WaterResource::where('wr_id', $id)->delete());
    }
}
