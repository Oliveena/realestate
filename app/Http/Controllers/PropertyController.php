<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

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
        // getting all properties along with related photos
        $properties = Property::with('photos')->get();
        return view('properties.index', compact('properties'));
    }

    public function create()
    {
        // displaying property creation form
        return view('properties.create');
    }

    public function store(Request $request)
    {
        // validating and storing new property data
        $request->validate([
            'realtorId' => 'required|integer|exists:users,id', 
            'address' => 'required|string|max:100',
            'region' => 'required|in:Montreal,Laval,Longueuil,Brossard',
            'postalCode' => 'required|string|max:10',
            'type' => 'required|in:Residential,Farm/Country Property,Multi-Family,Condominium',
            'price' => 'required|integer|min:0',
            'bedroom' => 'required|in:1,2,3',
            'bathroom' => 'required|in:1,2,3',
            'lotArea' => 'required|integer|min:1',
            'photos' => 'nullable|array', 
        ]);

        $property = Property::create($request->all());
        return redirect()->route('properties.index');
    }

    public function search(Request $request)
    {
        $properties = Property::where('address', 'like', '%' . $request->input('query') . '%')->get();
        return view('properties.search', compact('properties'));
    }

    public function show($id)
    {
        // finding a property by ID
        $property = Property::findOrFail($id);
        return view('properties.show', compact('property'));
    }

    public function update(Request $request, $id)
    {
        // updating the property by ID
        $property = Property::findOrFail($id);
        $property->update($request->all());
        return redirect()->route('properties.show', $id);
    }

    public function destroy($id)
    {
        // deleting property by ID
        Property::destroy($id);
        return redirect()->route('properties.index');
    }
}
