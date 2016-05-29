<?php

namespace App;
use App\Medicine;
use Illuminate\Database\Eloquent\Model;

class PreceptionDetail extends Model
{
    return $this->hasMany('Medicine');    
}
