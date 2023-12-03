<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;

class CategoryController extends Controller
{
    public function createForm()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'domaine' => 'required|string|max:255',
        ]);

        Categorie::create([
            'domaine' => $request->input('domaine'),
        ]);

        return redirect()->route('categories.create')->with('success', 'Category created successfully');
    }
    public function index()
    {
        $categories = Categorie::all();

        return view('categories.index', compact('categories'));
    }
    public function destroy($id)
    {
        $category = Categorie::findOrFail($id);
        $category->delete();

        return redirect()->route('categories.index')->with('success', 'Category deleted successfully');
    }
}
