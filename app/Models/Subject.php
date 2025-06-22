<?php

namespace App\Models;

use App\Models\Year;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = [
        'year_id',
        'subject_name',
        'subject_code',
    ];

    public function year()
    {
        return $this->belongsTo(Year::class);
    }
}
