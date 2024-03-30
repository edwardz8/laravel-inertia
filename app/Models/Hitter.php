<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hitter extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'team',
        'games',
        'pa',
        'atbats',
        'hits',
        'doubles',
        'triples',
        'homeruns',
        'runs',
        'rbi',
        'bb',
        'strikeouts',
        'hbp',
        'sb',
        'cs',
        'avg',
        'obp',
        'slg',
        'ops',
        'wOBA',
        'wRCplus',
        'BsR',
        'fld',
        'off',
        'def',
        'war',
        'adp',
        'id'
    ];
}
