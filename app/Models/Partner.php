<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    use HasFactory;

    static $statuses = [
        0 => "Arxive",
        1 => "Active"
    ];

    protected $table = 'partners';

    protected $guarded = [];
}
