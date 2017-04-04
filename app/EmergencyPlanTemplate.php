<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmergencyPlanTemplate extends Model
{
      protected $fillable = [
        'planname',
        'description',
        'usereditable',
        'required',
        'type',
      ];
}
