<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'image', 'name', 'slug', 'description', 'tech_stack', 'github_link', 'demo_link',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

}
