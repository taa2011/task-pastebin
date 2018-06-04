<?php

namespace App\Http\Controllers;


use App\Pasterec;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class PastebinController extends Controller
{



    public function post(Request $request)
    {

        $pasterec = Pasterec::fromRequest($request);

        return redirect()->route('show', $pasterec->hash);
    }

    public function show(Pasterec $pasterec)
    {
        $last10 = $this->getLast10();
        return view('request', compact('pasterec','last10'));
    }

    public function main()
    {
        $last10 = $this->getLast10();
        return view('main', compact('last10'));
    }

    private function getLast10()
    {
        $last10pasterecs = Pasterec::orderBy('created_at', 'desc')
            ->take(10)
            ->get();

        return $last10pasterecs;
    }


}
