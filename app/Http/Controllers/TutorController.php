<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TutorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        /*
         * $user = Auth::user();
        dd($user);
        if(!Auth::user()->hasAnyRole(['admin','tutor'])){
            abort(403);
        }*/
    }

    public function assistence(){
        return view('tutor/assistence');
    }

    public function evaluation(){
        return view('tutor/evaluation');
    }

    public function cycle(){
        return view('tutor/cycle');
    }

    public function student(){
        return view('tutor/student');
    }
}
