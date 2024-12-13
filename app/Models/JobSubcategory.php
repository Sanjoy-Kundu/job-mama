<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobSubcategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'job_categories_id'
    ];
}
