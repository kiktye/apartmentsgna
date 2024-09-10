<?php

namespace App\Http\Controllers;

use App\Models\Building;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\File;
use Illuminate\Validation\Rule;

class BuildingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $buildings = Building::all();

        return view('Buildings.index', ['buildings' => $buildings]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Buildings.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'location' => 'required',
            'status' => ['required', Rule::in(['In Progress', 'Finished'])],
            'photo' => ['required', File::types(['png', 'jpg', 'webp'])],
        ]);

        $photoPath = $request->photo->store('buildings');

        Building::create([
            'name' => $validatedData['name'],
            'description' => $validatedData['description'],
            'location' => $validatedData['location'],
            'status' => $validatedData['status'],
            'photo_path' => $photoPath,
        ]);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(Building $building)
    {
        // Check if the request is coming from the filter or home page
        $previousUrl = url()->previous();
    
        if (str_contains($previousUrl, '/buildings/filter')) {
            session(['back_url' => '/buildings/filter']);
        } elseif ($previousUrl === url('/')) {
            session(['back_url' => '/']);
        } else {
            session(['back_url' => url()->previous()]);
        }
    
        // Load the building with its related apartments
        $building = Building::with('apartments.rooms', 'photos')->find($building->id);
    
        // Return the view with the building data
        return view('buildings.show', ['building' => $building]);
    }
    
    /**
     * Show the form for editing the specified resource.
     */
    public function filter(Request $request)
    {
        $status = $request->input('status');

        if ($status) {
            $buildings = Building::where('status', $status)->get();
        } else {
            $buildings = Building::all();
        }

        return view('buildings.filter', ['buildings' => $buildings, 'status' => $status]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
