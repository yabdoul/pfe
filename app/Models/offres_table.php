<?php


// Dans le modèle OffreEmploi.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class offres_table  extends Model
{
    protected $fillable = [
        'fonction',
        'experience_min',
        'experience_max',
        'niveau_etude',
        'type_contrat',
        'departement_id',
        
    ];

    public function departement()
    {
        return $this->belongsTo(Departement::class);
    }
}
