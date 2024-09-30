<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pastry;

class PastryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pastries = Pastry::all(); // Mengambil semua data pastry
        return view('admin.pastries.index', compact('pastries')); // Mengirim data pastry ke view
    }

    // Metode ini untuk tampilan user
    public function userIndex()
{
    $pastries = Pastry::all(); // Mengambil semua data pastry
    return view('template.main', compact('pastries')); // Mengirim data pastry ke view
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pastries.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
        'name' => 'required|string|max:255',
        'deskripsi' => 'nullable|string',
        'price' => 'required|numeric',
        'image' => 'nullable|image|mimes:jpg,jpeg,png',
        ]);

    $pastry = new Pastry();
        $pastry->name = $request->name;
        $pastry->deskripsi = $request->deskripsi;
        $pastry->price = $request->price;

        if ($request->hasFile('image')) {
            $pastry->image = $request->file('image')->store('pastries', 'public');
        }

        $pastry->save();
        return redirect()->route('pastries.index')->with('success', 'Pastry created successfully.');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // return view('pastries.show', compact('pastries'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // return view('pastries.edit', compact('pastries'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id, $pastry)
    {
        // $request->validate([
        //     'name' => 'required|string|max:255',
        //     'description' => 'nullable|string',
        //     'price' => 'required|numeric',
        //     'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        // ]);
        // $pastry->name = $request->name;
        // $pastry->description = $request->description;
        // $pastry->price = $request->price;

        // if ($request->hasFile('image')) {
        //     $pastry->image = $request->file('image')->store('pastries', 'public');
        // }

        // $pastry->save();
        // return redirect()->route('pastries.index')->with('success', 'Pastry updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id, $pastry)
    {
        // $pastry->delete();
        // return redirect()->route('pastries.index')->with('success', 'Pastry deleted successfully.');
    }
}
