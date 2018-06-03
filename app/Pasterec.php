<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pasterec extends Model
{


    public function getRouteKeyName()
    {
        return 'hash';
    }

}
