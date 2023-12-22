<?php

// app/Http/Controllers/OffreController.php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Entreprise;
use App\Models\Offre;
use Illuminate\Http\Request;

class OffreController extends Controller
{
    // app/Http/Controllers/OffreController.php

    public function index()
    {
        $offres = Offre::all();
        return view('offres.index', compact('offres'));
    }

    public function createForm()
    {
        // Fetch the necessary data from the database
        $entreprises = Entreprise::all();
        $categories = Categorie::all();

        // Pass the data to the view
        return view('offres.create', compact('entreprises', 'categories'));
    }

    public function create()
    {
        return view('offres.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'poste' => 'required|string|max:255',
            'description' => 'required|string',
            'entreprise_associee' => 'required|exists:entreprises,id',
            'categorie_id' => 'required|exists:categories,id',
            'competences' => 'required|string|max:255',
            'emplacement' => 'required|string|max:255',
            'date_de_publication' => 'required|date',
            'date_de_cloture' => 'required|date',
        ]);

        // Explicitly set the entreprise_associee value
        $request['entreprise_associee'] = $request->input('entreprise_associee');

        // Create and store the offre
        Offre::create($request->all());

        return redirect()->route('offres.index')->with('success', 'Offre created successfully!');
    }
    public function show()
    {
        $offre = Offre::all();
        return view('offresshow', compact('offre'));
    }
    public function search(Request $request)
    {
        $offres = Offre::where('poste', 'LIKE', '%' . $request->keywords . '%')
            ->orWhere('competences', 'LIKE', '%' . $request->keywords . '%')
            ->orWhere('entreprise_associee', 'LIKE', '%' . $request->keywords . '%')
            ->get();

        return view('offresshow')->with('offres', $offres);
    }
    public function welcome()
    {
        $offres = Offre::latest()->take(4)->get();
        return view('welcome', compact('offres'));
    }




    /*public function edit(Offre $offre)
    {
        // Add logic for the edit view if needed
    }

    public function update(Request $request, Offre $offre)
    {
        $request->validate([
            // Add validation rules for the input fields
        ]);

        $offre->update($request->all());

        return redirect()->route('offres.index')->with('success', 'Offre updated successfully');
    }
*/
    public function destroy(Offre $offre)
    {
        $offre->delete();

        return redirect()->route('offres.index')->with('success', 'Offre deleted successfully');
    }
}
