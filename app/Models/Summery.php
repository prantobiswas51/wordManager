<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Summery extends Model
{
    protected $fillable = [
        'story_id',
        'summery_content'
    ];

    public function story()
    {
        return $this->belongsTo(Story::class);
    }
}
