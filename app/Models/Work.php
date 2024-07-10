<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use HasFactory;

    static $statuses = [
        0 => "Arxive",
        1 => "Active"
    ];

    protected $table = 'works';

    protected $guarded = [];

}
