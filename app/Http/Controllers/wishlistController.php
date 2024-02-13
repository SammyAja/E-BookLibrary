<?php

namespace App\Http\Controllers;

use App\Models\book;
use Illuminate\Http\Request;

class wishlistController extends Controller
{
    public function index()
{
    return book::all();
}

public function store(Request $request)
{
    return book::create($request->all());
}

public function show(book $book)
{
    return $book;
}

public function update(Request $request, book $book)
{
    $book->update($request->all());
    return $book;
}

public function destroy(book $book)
{
    $book->delete();
    return response()->json(null, 204);
}
}
