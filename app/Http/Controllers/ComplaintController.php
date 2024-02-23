<?php

namespace App\Http\Controllers;

use App\Models\Complaint;
use Illuminate\Http\Request;

class ComplaintController extends Controller
{
    public function store(Request $request)
    {
        $complaint = Complaint::create($request->all());

        return response()->json(['message' => 'Complaint submitted successfully', 'complaint' => $complaint], 201);
    }

    public function index()
    {
        $complaints = Complaint::all();

        return response()->json(['complaints' => $complaints]);
    }

    public function show($id)
    {
        $complaint = Complaint::findOrFail($id);

        return response()->json(['complaint' => $complaint]);
    }

}
