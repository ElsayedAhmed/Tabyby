<?php

namespace App;
use App\PreceptionDetail;

use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    return $this->belongsTo('PreceptionDetail');
}
