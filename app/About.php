<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    public $fillable = [
        // section_key has diffrent value fin each section
        'section_key' , 'meta' , 'img'
];
}
