<?php

namespace App\Http\Controllers;

use App\Models\ebook;
use Illuminate\Http\Request;

class ebookController extends Controller
{
    public function create(Request $request)
    {
        $request->validate(ebook::$rules);

        $eBook = ebook::create($request->all());

        return response()->json($eBook, 201);
    }
}
