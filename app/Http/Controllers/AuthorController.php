<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\authorsme;

class AuthorController extends Controller
{
    public function createnewauthor(Request $request)
    {
        $athr = new authorsme();

        $athr->name = $request->input('name');
        $athr->date_of_birth = $request->input('date_of_birth');
        $athr->place_of_birth = $request->input('place_of_birth');
        $athr->gender = $request->input('gender');
        $athr->email = $request->input('email');
        $athr->hp = $request->input('hp');
        
        
        $athr->save();
        return response()->json($athr);
    }

    public function readauthor()
    {
        $athr = authorsme::all();
        return response()->json($athr);
    }

    public function readidauthor($id)
    {
        $athr = authorsme::find($id);
        return response()->json($athr);
        
    }

    public function updateauthor(Request $request, $id)
    {
        $athr = authorsme::find($id);
        $athr->name = $request->input('name');
        $athr->date_of_birth = $request->input('date_of_birth');
        $athr->place_of_birth = $request->input('place_of_birth');
        $athr->gender = $request->input('gender');
        $athr->email = $request->input('email');
        $athr->hp = $request->input('hp');
        

        $athr->save();
        return response()->json($athr);
        
    }

    public function deleteauthor($id)
    {
        $athr = authorsme::find($id);
        $athr->delete();

        return response()->json($athr);
    }
}
