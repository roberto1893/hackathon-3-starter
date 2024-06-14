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
        $animal = Animals::select('animals.*')
        ->join('owners', 'owner.id', '=', 'owner.id')
        ->join ('images', 'image.id', '=', 'image.id');
        
        dd($animal);
        return view('index', compact('list')); 
    }

    public function search(Request $request) //field key searching inside function
    {
        $animals = $animal = DB::select('SELECT * FROM animals WHERE name LIKE "%' . $_GET['search'] .'%"');
        return view('index', compact('list'));
    }

    public function update(Request $request, $id, $readonly = false)
    {
        return view('update', compact('animal data'));

        if ($id)
        {
            //query data
            $animal = Animal::select('SELECT * FROM animals WHERE');
            
            //if readonly pass also a 'readonly'

            //return view with data (and with string)
            return view('update', compact('animal data'));
        } else {
            
            //return view as data was empty object based on animal model
            return view();
        }
    }

    public function savingData(Request $request, $id = null)
    {
        //either get from database or create empty then change parameters according to request
        //then save then redirect to detail
        //flash when submitted

        $animal_id = Animal::get()->pluck('id');

        $request->validate([
            'name' => 'required',
            'species' => 'required',
            'breed' => 'required',
            'age' => 'required',
            'weight' => 'required',

        ]);

        if ($id)
        {
            $animal = Animal::findOrFail($id);
        } else {
            $animal = new Animal;
        }

        $animal->name = $request->input('name');
        $animal->species = $request->input('species');
        $animal->breed = $request->input('breed');
        $animal->age = $request->input('age');
        $animal->weight = $request->input('weight');

        $animal->save();

        session()->flash('success_message', 'Successfully submitted');

        return redirect()->route('index');
        
    }
}
