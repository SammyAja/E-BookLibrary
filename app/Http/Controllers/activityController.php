<?php

namespace App\Http\Controllers;

use App\Models\activity;
use Illuminate\Http\Request;


class activityController extends Controller
{
    public function logActivity(Request $request)

    {
        // Validasi request
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'action' => 'required',
            'description' => 'required',
        ]);

        // Buat log aktivitas
        activity::create([
            'user_id' => $request->user_id,
            'action' => $request->action,
            'description' => $request->description,
        ]);

        return response()->json(['message' => 'Activity logged successfully'], 201);
    }
}
