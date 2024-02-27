<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kursi extends Model
{
    use HasFactory;

    protected $fillable = [
        "nosaukums",
        "paskaidrojosais_text",
        "banera_adrese",
        "cilveku_skaits",
    ];
}
