<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class CustomerController extends Controller
{
    public function update(Request $request, $id)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:customers,email,' . $id,
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        // Find the customer by ID
        $customer = User::findOrFail($id);

        // Update customer data
        $customer->name = $request->input('name');
        $customer->email = $request->input('email');
        $customer->password = $request->input('password');
        // Update other fields as needed

        // Save the updated customer
        $customer->save();

        return response()->json(['message' => 'Customer updated successfully']);
    }
}