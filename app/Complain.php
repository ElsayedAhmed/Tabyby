<?php

namespace App;
use App\ComplainDetail;

use Illuminate\Database\Eloquent\Model;

class Complain extends Model
{
	return $this->hasOne('ComplainDetail');    
}
