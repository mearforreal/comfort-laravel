<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Catalog extends Model
{
    use HasFactory;
    use Sluggable;

    protected $fillable = [
        'title',
        'slug',
        'is_active'
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function scopeActive($query)
    {
        $query = $query->where('is_active', true);
        return $query;
    }

    public function subcatalogs()
    {
        return $this->hasMany(SubCatalog::class);
    }

    public function sizes()
    {
        return $this->hasMany(Size::class);
    }

    public function products()
    {
        return $this->hasManyThrough(Product::class, SubCatalog::class); // Local key on the environments table...);
    }
}
