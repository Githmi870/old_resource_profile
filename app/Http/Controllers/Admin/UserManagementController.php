<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserManagementController extends Controller
{
    public function index()
    {
        return response()->json(User::where('is_admin', false)
            ->orderBy('created_at', 'desc')
            ->get());
    }

    public function approve($user)
    {
        return response()->json(User::where('id', $user)->update(['status' => 'approved']));
    }

    public function reject($user)
    {
        return response()->json(User::where('id', $user)->update(['status' => 'denied']));
    }
}