<?php

namespace App\Models;

use App\Models\Candidat;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomFormation',
        'duree',
        'description',
        'isStarted',
        'date_debut',
        'referentiel_id  ',
    ];


    public function referentiel(){
        return $this->belongsTo(Referentiel::class);
    }

    public function candidats()
    {
        return $this->belongsToMany(Candidat::class);
    }

    public function getCandidatsCountAttribute()
    {
        return $this->candidats()->count();
    }

    protected $table = 'formations';
}
