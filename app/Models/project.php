<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class project extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'category',
        'duration',
        'deadline',
        'freelancer_type',
        'freelancer_level',
        'tags',
        'skills',
        'budget_type',
        'budget_from',
        'budget_to',
        'fixed_price',
        'attachment',
        'languages',
        'language_fluency',
        'description'
    ];
}
