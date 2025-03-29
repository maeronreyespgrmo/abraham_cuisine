<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FeedbackScore extends Model
{
    //
    protected $fillable = [
        'sentimental',
        'scores',
    ];

    protected $table = 'tbl_feedback_scores';
}
