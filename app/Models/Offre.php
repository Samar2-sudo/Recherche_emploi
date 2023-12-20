<?php

// app/Models/Offre.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offre extends Model
{
    use HasFactory;

    protected $fillable = [
        'poste',
        'description',
        'entreprise_associee',
        'categorie_id',
        'competences',
        'emplacement',
        'date_de_publication',
        'date_de_cloture',
    ];

    // Define the relationship with the Entreprise model
    public function entreprise()
    {
        return $this->belongsTo(Entreprise::class, 'entreprise_associee');
    }
    public function categorie()
    {
        return $this->belongsTo(Categorie::class, 'categorie_id');
    }
}
