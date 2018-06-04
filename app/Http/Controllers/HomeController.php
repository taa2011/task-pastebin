<?php

namespace App\Http\Controllers;

use App\User;
use App\Pasterec;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $myrecs = $this->getMyRecs();
        return view('myrecs', compact('myrecs'));

    }

    private function getMyRecs()
    {
        ;
        $myrecs = User::find(Auth::user()->id)->pasterecs->sortByDesc('created_at');
        // $myRecs = Pasterec::orderBy('created_at', 'desc')
        //     ->get();

        return $myrecs;
    }

}
