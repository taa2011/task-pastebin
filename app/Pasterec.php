<?php

namespace App;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

use Illuminate\Database\Eloquent\Model;

class Pasterec extends Model
{


    public function getRouteKeyName()
    {
        return 'hash';
    }

    public static function fromRequest(Request $request): Pasterec
    {
        $pasterec = new static();

        $user =  Auth::user();
        if ($user) $pasterec->user_id = $user->id;
        $pasterec->code = $request->code;
        $pasterec->hash = substr(str_shuffle('1234567890qwertyuiopasdfghjklzxcvbnm'),1,8);
        $pasterec->save();

        return $pasterec;

    }


}

