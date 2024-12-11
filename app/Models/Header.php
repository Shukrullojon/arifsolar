<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Header extends Model
{
    use HasFactory;

    protected $table = 'headers';

    protected $guarded = [];

    static $sections = [
        "about_section" => "About Section",
        "work_section" => "Work Section",
        "job_section" => "Job Section",
        "review_section" => "Review Section",
        "comment_section" => "Comment Section",
        "news_section" => "News Section",
        "consultation_section" => "Consultation Section",
        "partner_section" => "Partner Section",
        "address_section" => "Address Section",
        "question_section" => "Question Section",
    ];

    static $statuses = [
        1 => "Active ✅",
        0 => "Arxive ❌",
    ];
}
