<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    use HasFactory;

    protected $fillable = [
        'book_code',
        'book_title',
        'author',
        'publisher',
        'available_stock',
        'total_stock',
      ];
}
