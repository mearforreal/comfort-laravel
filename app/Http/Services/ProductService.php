<?php

namespace App\Http\Services;

use App\Models\Product;

class ProductService
{



    public function filter($request)
    {

        $query = Product::query();

        // Filter by size
        if ($request->has('size')) {
            $size = $request->get('size');
            $query->where('size', $size);
        }

        // Filter by brand
        if ($request->has('brand')) {
            $brand = $request->get('brand');
            $query->where('brend', $brand);
        }

        // Sort by price (ascending or descending)
        if ($request->has('sort')) {
            $sort = $request->get('sort');
            if ($sort == 'asc') {
                $query->orderBy('price', 'asc');
            } elseif ($sort == 'desc') {
                $query->orderBy('price', 'desc');
            }
        }

        // Search by keyword
        if ($request->has('q')) {
            $q = $request->get('q');
            $query->where('name', 'LIKE', '%' . $q . '%')
                ->orWhere('description', 'LIKE', '%' . $q . '%');
        }

        // Execute the query and return the results
        $products = $query->get();

        return view('products.index', compact('products'));
    }
}
