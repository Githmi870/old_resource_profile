<?php

namespace App\Http\Controllers;

use App\Models\TDHasGND;
use App\Models\TouristDestination;
use Illuminate\Http\Request;

class TDController extends Controller
{
    public function getTD($gndUid)
    {
        return response()->json(
            TouristDestination::whereIn('td_id', TDHasGND::where('gnd_uid', $gndUid)->pluck('td_id'))->get()
        );
    }

    public function insertTD(Request $request, $gndUid)
    {
        $request->validate([
            'td_name' => 'required|string',
            'td_reason' => 'required|string',
            'td_ownership' => 'required|string',
            'gnd_uid' => 'required|string',
            'td_other' => 'nullable|string',
        ]);

        if ($request['td_other']) {
            try {
                $td = TouristDestination::create([
                    'td_name' => $request['td_name'],
                    'td_reason' => $request['td_reason'],
                    'td_ownership' => $request['td_other'],
                ]);

                $td->td_id = $td->id;

                TDHasGND::create([
                    'td_id' => $td->td_id,
                    'gnd_uid' => $gndUid
                ]);

                return response()->json([
                    'message' => 'successful'
                ]);
            } catch (\Throwable $th) {
                return response()->json([
                    'message' => 'failed' . $th
                ]);
            }
        } else {
            try {
                $td = TouristDestination::create([
                    'td_name' => $request['td_name'],
                    'td_reason' => $request['td_reason'],
                    'td_ownership' => $request['td_ownership'],
                ]);

                $td->td_id = $td->id;

                TDHasGND::create([
                    'td_id' => $td->td_id,
                    'gnd_uid' => $gndUid
                ]);

                return response()->json([
                    'message' => 'successful'
                ]);
            } catch (\Throwable $th) {
                return response()->json([
                    'message' => 'failed' . $th
                ]);
            }
        }
    }

    public function deleteTD($td_id, $gnd_uid)
    {
        TDHasGND::where('td_id', $td_id)->where('gnd_uid', $gnd_uid)->delete();

        return response()->json([
            'message' => 'successful'
        ]);
    }
}
