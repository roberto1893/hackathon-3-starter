<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animals;

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

        return view('update', compact('animal', 'readonly'));

        if ($id)
        {
            //query data

            //if readonly pass also a 'readonly'

            //return vie with data (and with string)
        } else {
//return view as data was empty object based on animal model
        }
    }

    public function savingData(Request $request, $id = null)
    {
        //either get from database or create empty then change parameters according to request
        //then save then redirect to detail
        //flash when submitted
        
    }
}
