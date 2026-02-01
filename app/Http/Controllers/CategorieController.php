<?php

namespace App\Http\Controllers;

use App\Models\categorie;
use Illuminate\Http\Request;


class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = categorie::all();
        return view('categorie.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categorie.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:25',
            'slug' => 'required|string|max:25',
            'description' => 'required|string|max:255'
        ]);
        Categorie::create($validated);

        return redirect()->route('categorie.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(categorie $categorie)
    {
        // return view('categorie.show', compact('categorie'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(categorie $categorie)
    {
        return view('categorie.edit', compact('categorie'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, categorie $categorie)
    {
        $validated = $request->validate([
        'name' => 'required|max:25',
            'slug' => 'required|string|max:25',
            'description' => 'required|string|max:255'
    ]);

    $validated['completed'] = $request->has('completed');

    $categorie->update($validated);

    return redirect()->route('categorie.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(categorie $categorie)
    {
        $categorie->delete();
        return redirect()->route('categorie.index');
    }
}
