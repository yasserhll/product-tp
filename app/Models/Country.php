<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    // Colonnes qui peuvent être remplies en masse
    protected $fillable = ['name', 'description', 'position'];

    // Si tu souhaites désactiver la gestion automatique des timestamps
    // public $timestamps = false;
}
