<?php

namespace App;
use App\Complain;
use Illuminate\Database\Eloquent\Model;

class ComplainDetail extends Model
{
    return $this->belongsTo('Complain');
}
