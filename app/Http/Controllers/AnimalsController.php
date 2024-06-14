<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimalsController extends Controller
{
    public function index()
    {
        // query everything
        return view('index', compact('list')); 
    }

    public function search(Request $request) //field key searching inside function
    {
        return view('index', compact('list'));
    }

    public function update(Request $request, $id, $readonly = false)
    {
        return view('update', compact('animal data'));

        if ($readonly == true)
        {
            
        } else {

        }
    }
}
