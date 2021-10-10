<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\book;

class BookController extends Controller
{
    public function create(Request $request)
    {
        $allbook = new book();

        $allbook->title = $request->input('title');
        $allbook->description = $request->input('description');
        $allbook->author = $request->input('author');
        $allbook->publisher = $request->input('publisher');
        $allbook->date_of_issue = $request->input('date_of_issue');
        
        $allbook->save();
        return response()->json($allbook);
    }

    public function read()
    {
        $allbook = book::all();
        return response()->json($allbook);
    }

    public function readwithid($id)
    {
        $allbook = book::find($id);
        return response()->json($allbook);
        
    }

    public function updatewhereid(Request $request, $id)
    {
        $allbook = book::find($id);
        $allbook->title = $request->input('title');
        $allbook->description = $request->input('description');
        $allbook->author = $request->input('author');
        $allbook->publisher = $request->input('publisher');
        $allbook->date_of_issue = $request->input('date_of_issue');

        $allbook->save();
        return response()->json($allbook);
        
    }

    public function deleteid($id)
    {
        $allbook = book::find($id);
        $allbook->delete();

        return response()->json($allbook);
    }
}
