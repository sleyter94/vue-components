<?php

namespace App\Http\Controllers;

use App\Idea;
use Illuminate\Http\Request;

class IdeaController extends Controller
{

    public function getIdeas(){
        return Idea::orderBy('id','DESC')->get();
    }

    public function saveIdea(Request  $request){
        $this->validate($request,[
            'description'=>'required'
        ]);

        Idea::create($request->all());

        return;
    }

}
