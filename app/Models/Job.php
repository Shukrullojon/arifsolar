<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    static $statuses = [
        0 => "Arxive",
        1 => "Active"
    ];

    protected $table = 'jobs';

    protected $guarded = [];

}
