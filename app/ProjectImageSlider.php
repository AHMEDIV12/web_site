<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectImageSlider extends Model
{
    protected $fillable = ['project_img' ,'project_name' ,'project_adress','client_name' ,'project_status'];
}
