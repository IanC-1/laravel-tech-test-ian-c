<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    /* Fillable Fields */
    protected $fillable = [
        'name',
        'email',
        'logo',
        'website'
    ];
}
