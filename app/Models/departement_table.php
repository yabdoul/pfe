<?php
// Dans le modèle Departement.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class departement_table extends Model
{
    protected $fillable = ['nom' ];

    public function offresEmploi()
    {
        return $this->hasMany(OffreEmploi::class);
    }
}

