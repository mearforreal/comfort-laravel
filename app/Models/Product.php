<?php

namespace App\Models;

use App\Models\Scopes\ActiveScope;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    use Sluggable;


    protected $casts = [
        'sizes' => 'array',
        'gallery' => 'array',
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    protected $fillable = [
        'title',
        'short_desc',
        'desc',
        'price',
        'is_discount',
        'price_discount',
        'articul',
        'brend',
        'stock',
        // 'video',
        'thumbnail',
        'gallery',
        'slug',
        'sizes',
        'sub_catalog_id',
        'is_active'

    ];


    // protected static function booted(): void
    // {
    //     static::addGlobalScope(new ActiveScope);
    // }


    public function scopeActive($query)
    {
        $query = $query->where('is_active', true);
        return $query;
    }

    public function subCatalog()
    {
        return $this->belongsTo(SubCatalog::class);
    }

    public function sizes()
    {
        return $this->belongsToMany(Size::class, 'size_products')->withPivot('quantity');
    }
}
