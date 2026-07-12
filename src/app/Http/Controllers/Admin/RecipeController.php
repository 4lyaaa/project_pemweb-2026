<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Recipe;
use Illuminate\Support\Facades\Storage;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $recipes = Recipe::latest()->get();

        return view('admin.resep.index', compact('recipes'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.resep.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'rasa' => 'required',
            'harga' => 'required|numeric',
            'deskripsi' => 'required',
            'bahan' => 'required',
            'langkah' => 'required',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $foto = null;

        if ($request->hasFile('foto')) {
            $foto = $request->file('foto')->store('recipes', 'public');
        }

        Recipe::create([
            'nama' => $request->nama,
            'rasa' => $request->rasa,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi,
            'bahan' => $request->bahan,
            'langkah' => $request->langkah,
            'foto' => $foto,
        ]);

        return redirect()
            ->route('resep.index')
            ->with('success', 'Resep berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.resep.edit');
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