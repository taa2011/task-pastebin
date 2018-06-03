<?php

namespace App\Http\Controllers;


use App\Pasterec;
use Illuminate\Http\Request;

class PastebinController extends Controller
{
    public function post(Request $request)
    {

        $pasterec = new Pasterec;

        $pasterec->code = $request->code;
        $pasterec->hash = substr(str_shuffle('1234567890qwertyuiopasdfghjklzxcvbnm'),1,8);
        $pasterec->save();

        return redirect()->route('show', $pasterec->hash);
        // return view('request', compact('request'));
    }

    public function show(Pasterec $pasterec)
    {
        $last10 = $this->getLast10();
        return view('request', compact('pasterec','last10'));
    }

    public function main()
    {
        $last10 = $this->getLast10();
        return view('welcome', compact('last10'));
    }


    public function test()
    {
        $last10 = $this->getLast10();
        return view('last10pasterecs', compact('last10'));
    }

    private function getLast10()
    {
        $last10pasterecs = Pasterec::orderBy('created_at', 'desc')
            ->take(10)
            ->get();

        return $last10pasterecs;
    }


}
