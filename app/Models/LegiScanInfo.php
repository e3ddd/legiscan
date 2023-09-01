<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LegiScanInfo extends Model
{
    use HasFactory;

    protected $table = "legiScanInfo";

    protected $fillable = [
        "query",
        "relevance",
        "state",
        "bill_number",
        "bill_id",
        "change_hash",
        "url",
        "text_url",
        "research_url",
        "last_action_date",
        "last_action",
        "title",
    ];
}
