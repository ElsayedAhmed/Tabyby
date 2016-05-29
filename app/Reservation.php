<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    public function reservationType(){
        return $this->belongsTo(ReserveType::class);
    }
}
