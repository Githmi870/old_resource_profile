<?php

namespace App\Http\Controllers;

use App\Models\GovermentFigure;
use Illuminate\Http\Request;

class GovFigureController extends Controller
{

    public function getAllGovernmentFigure($gnd_uid)
    {
        return response()->json(GovermentFigure::where('gnd_uid', $gnd_uid)->get(['gf_id', 'gf_name', 'gf_type', 'gf_address']));
    }

    public function insertGovernmentFigure(Request $request)
    {
        try {
            $request->validate([
                'gf_name' => 'required|string|max:255',
                'gf_type' => 'required|string|max:255',
                'gf_address' => 'required|string|max:255',
            ]);

            $gov_figure = new GovermentFigure();
            $gov_figure->gf_name = $request->gf_name;
            $gov_figure->gf_type = $request->gf_type;
            $gov_figure->gf_address = $request->gf_address;
            $gov_figure->gnd_uid = $request->gnd_uid;
            $gov_figure->save();

            return response()->json([
                'success' => true,
                'message' => 'Government Figure added successfully.'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'error' => $e->getMessage()
            ]);
        }
    }

    public function deleteGovernmentFigure($gf_id) {
        return response()->json(GovermentFigure::where('gf_id', $gf_id)->delete());
    }
}
