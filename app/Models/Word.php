<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
    public $fillable = [
        'english_word',
        'meaning',
        'notes'
    ];
}
