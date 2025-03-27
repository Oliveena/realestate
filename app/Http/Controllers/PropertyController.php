<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Illuminate\Support\Facades\Auth;

class PropertyController extends Controller
{
    // setting up a Monolog logger
    protected $logger;

    public function __construct()
    {
        $this->logger = new Logger('property-controller');
        $this->logger->pushHandler(new StreamHandler(storage_path('logs/property.log'), 100)); // Store logs in a file
    }

    public function index()
    {
        $properties = Property::paginate(16);
        return view('property.index', compact('properties'));
    }

    public function create()
    {
        return view('property.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'address' => 'required|string|max:100',
            'region' => 'required|string',
            'price' => 'required|integer',
            'type' => 'required|string',
            'bedroom' => 'nullable|in:1,2,3',
            'bathroom' => 'nullable|in:1,2,3',
            'yearBuilt' => 'required|integer',
            'description' => 'required|string',
        ]);

        Property::create([
            'address' => $request->address,
            'region' => $request->region,
            'price' => $request->price,
            'type' => $request->type,
            'bedroom' => $request->bedroom,
            'bathroom' => $request->bathroom,
            'yearBuilt' => $request->yearBuilt,
            'description' => $request->description,
            'realtorId' => Auth::id(),   // Use authenticated user's ID 
        ]);

        return redirect()->route('property.index')->with('success', 'Property added successfully!');
    }

    public function edit($id)
    {
        // get property to edit by ID
        $property = Property::findOrFail($id);

        // return view with property info
        return view('property.edit', compact('property'));
    }

    public function update(Request $request, $id)
    {
        // get property by ID
        $property = Property::findOrFail($id);

        // validate data
        $request->validate([
            'address' => 'required|string|max:100',
            'region' => 'required|string',
            'price' => 'required|integer',
            'type' => 'required|string',
            'bedroom' => 'nullable|in:1,2,3',
            'bathroom' => 'nullable|in:1,2,3',
            'yearBuilt' => 'required|integer',
            'description' => 'required|string',
        ]);

        // update property data
        $property->update([
            'address' => $request->address,
            'region' => $request->region,
            'price' => $request->price,
            'type' => $request->type,
            'bedroom' => $request->bedroom,
            'bathroom' => $request->bathroom,
            'yearBuilt' => $request->yearBuilt,
            'description' => $request->description,
        ]);

        // toast message + return to index page
        return redirect()->route('property.index')->with('success', 'Property updated successfully!');
    }


    public function search(Request $request)
    {
        $query = Property::query();

        // Filter by region
        if ($request->filled('location')) {
            $query->where('region', $request->input('location'));
        }

        // Filter by price range
        if ($request->filled('min_price')) {
            $query->where('price', '>=', $request->input('min_price'));
        }
        
        if ($request->filled('max_price')) {
            $query->where('price', '<=', $request->input('max_price'));
        }

        // Filter by property type
        if ($request->filled('property_type')) {
            $query->whereIn('type', $request->input('property_type'));
        }

        // Filter by bedrooms and bathrooms
        if ($request->filled('bedrooms')) {
            $query->where('bedroom', '=', $request->input('bedrooms'));
        }

        if ($request->filled('bathrooms')) {
            $query->where('bathroom', '=', $request->input('bathrooms'));
        }

        $properties = $query->paginate(8)->withQueryString();

        return view('property.search', compact('properties'));
    }


    public function show($id)
    {
        // finding a property by ID
        $property = Property::findOrFail($id);
        return view('property.show', compact('property'));
    }

    public function destroy($id)
    {

        $property = Property::findOrFail($id);

        // TODO: delete all images associated with a deleted property 
        // if ($property->images) {
        //     foreach ($property->images as $image) {
        //         ...::delete('public/properties/' . $property->id . '/' . $image->file_name);
        //     }
        // }

        $property->delete();

        return redirect()->route('property.index')->with('success', 'Property and associated images deleted successfully');
    }


    public function images($id)
    {
        $property = Property::findOrFail($id);

        $images = $property->images;

        return view('property.images', compact('property', 'images'));
    }
}
