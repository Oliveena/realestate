<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;

class PropertyController extends Controller
{
    public function index()
    {
        // getting all properties
        $properties = Property::all(); 
        // viewing all properties
        return view('properties.index', compact('properties'));
    }

    public function create()
    {
        // creating a property via form
        return view('properties.create'); 
    }

    public function store(Request $request)
    {
        $request->validate([
            'realtorId' => 'required|integer|exists:realtors,id', 
        'address' => 'required|string|max:100',
        'region' => 'required|in:Montreal,Laval,Longueuil,Brossard', 
        'postalCode' => 'required|string|max:10',
        'type' => 'required|in:Residential,Farm/Country Property,Multi-Family,Condominium',
        'price' => 'required|integer|min:0', 
        'bedroom' => 'required|in:1,2,3', 
        'bathroom' => 'required|in:1,2,3',
        'lotArea' => 'required|integer|min:1',
        'photos' => 'nullable|integer|exists:photos,id',
        // TODO: deal with photos as a separate table  
        ]);

        $property = Property::create($request->all());
        return redirect()->route('properties.index');
    }

    public function show($id)
    {
        // find a property by id
        $property = Property::findOrFail($id); 
        return view('properties.show', compact('property'));
    }

    public function update(Request $request, $id)
    {
        // update property by ID
        $property = Property::findOrFail($id);
        $property->update($request->all());
        return redirect()->route('properties.show', $id);
    }

    public function destroy($id)
    {
        // delete property by ID
        Property::destroy($id);
        return redirect()->route('properties.index');
    }

    public function images($id)
    {
        // TODO: Logic to retrieve images for the property
    }
}

