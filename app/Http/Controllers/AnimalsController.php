<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Owner;
use App\Models\Animals;
use App\Models\Images;

class AnimalsController extends Controller
{
    public function index()
    {
        //query search all, linking with owners and images
        $animal = Animals::select('SELECT * FROM animals LEFT JOIN owners ON owner.id = owners.id LEFT JOIN images ON images.id = images.id');

        return view('index', compact('list')); 
    }

    public function search(Request $request) //field key searching inside function
    {
        return view('index', compact('list'));
    }

    public function update(Request $request, $id, $readonly = false)
    {
        return view('update', compact('animal data'));

        if ($id)
        {
            //query data

            //if readonly pass also a 'readonly'

            //return view with data (and with string)
            return view('update', compact('animal data'));
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
