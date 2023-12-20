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

    /*public function index()
    {
        $offres = Offre::all();
        return view('offres.index', compact('offres'));
    }*/
    public function index()
{
    $offres = Offre::all();
    $entreprises = Entreprise::all(); // Assurez-vous que cette ligne est présente
    return view('offres.index', compact('offres', 'entreprises'));
}


   /* public function createForm()
    {
        // Fetch the necessary data from the database
        $entreprise = Entreprise::all();
        $categories = Categorie::all();

        // Pass the data to the view
        return view('offres.create', compact('entreprise', 'categories'));
    }*/




    public function create()
{
    $categories =  Categorie::all();
    $entreprises = Entreprise::all();

    return view('offres.create', compact('categories', 'entreprises'));
}



  /*  public function create()
    {
        return view('offres.create');
    }*/


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
    $categories = Categorie::all(); // Ajoutez cette ligne pour récupérer les catégories

    return view('welcome', compact('offres', 'categories'));
}

    /*public function welcome()
    {
        $offre = Offre::latest()->take(4)->get();

        return view('welcome')->with('offres', $offre);
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
    // Assurez-vous que vous récupérez l'offre à éditer dans la méthode du contrôleur
public function edit(Offre $offre)
{
    // Fetch the necessary data from the database
    $entreprises = Entreprise::all();
    $categories = Categorie::all();

    // Pass the data to the view along with the $offre
    return view('offres.edit', compact('offre', 'entreprises', 'categories'));
}



    public function update(Request $request, Offre $offre)
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

        $offre->update($request->all());

        return redirect()->route('offres.index')->with('success', 'Offre mise à jour avec succès');
    }
   /* public function getOffresByCategory($categorie_id)
{
    $category = Categorie::findOrFail($categorie_id);
    $offres = Offre::where('categorie_id', $category->id)->get();

    $categories = Categorie::all(); // Vous pouvez également passer cela à la vue si nécessaire

    return view('offres.index', compact('offres', 'categories'));
}*/
/*public function getOffresByCategory($categorie_id)
{
    $category = Category::findOrFail($categorie_id);
    $offres = $category->offres; // Assurez-vous que la relation est correctement définie dans le modèle Category

    return view('offres.show', compact('offres'));
}*/

public function offresByCategory($categorie_id)
    {
        // Récupérer les offres en fonction de la catégorie
        $offres = Offre::where('categorie_id', $categorie_id)->get();


        // Retourner la vue avec les offres
        return view('offres_par_categorie', ['offres' => $offres]);
    }





}
