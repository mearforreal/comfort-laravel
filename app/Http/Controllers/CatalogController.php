<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Services\ProductService;
use App\Models\Catalog;
use App\Models\Product;
use App\Models\Size;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    //

    protected $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }


    public function index()
    {
        $catalogs = Catalog::active()->with('subcatalogs')->get();

        return view('shop.catalog.index', compact('catalogs'));
    }

    public function detais($slug, Request $request)
    {

        $validatedData = $request->validate([
            'size' => 'nullable|array',
            'brand' => 'nullable|array',
        ]);


        $catalog = Catalog::active()->where('slug', $slug)->with(['subcatalogs' => function ($query) {
            $query->withCount('products');
        }])->first();

        $sizes = Size::where('catalog_id', $catalog->id)->get();

        $catalog_products = $catalog->products();
        $products_total = $catalog_products->count();

        $brends = $catalog_products->select('brend')
            ->whereNotNull('brend')
            ->distinct()
            ->pluck('brend');

        $product_query = Product::active();
        if ($request->has('subcatalog')) {
            $subcatalog_id = $request->get('subcatalog');
            $product_query->where('sub_catalog_id', $subcatalog_id);
        }

        if ($request->has('brand')) {
            $brand = $validatedData['brand'] ?? [];
            $product_query->whereIn('brend', $brand);
        }

        if ($request->has('size')) {
            $size = $validatedData['size'] ?? [];
            $product_query->with('sizes')->whereHas('sizes', function ($q) use ($size) {
                $q->whereIn('size', $size);
            });
        }

        $products = $product_query->paginate(10);

        // $this->productService->filter()

        // if ($request->has('subcatalog') || $request->has('brand') || $request->has('size')) {
        //     $subcatalog_id = $request->get('subcatalog');
        //     $size = $validatedData['size'] ?? [];
        //     $brand = $validatedData['brand'] ?? [];


        //     $products = Product::active()->with('sizes')->whereHas('sizes', function ($q) use ($size) {
        //         $q->whereIn('size', $size);
        //     })->orWhere('sub_catalog_id', $subcatalog_id)->orWhereIn('brend', $brand)->get();

        //     // with('order_items')->whereHas('order_items', function($q) {
        //     //     $q->where('item_status', 'Return Approved');
        //     //    })->get();
        // } else {
        //     $products = $catalog_products->paginate(10);
        // }

        return view('shop.catalog.details', compact('catalog', 'products', 'products_total', 'brends', 'sizes'));
    }


    public function filter($slug, Request $request)
    {
        $validatedData = $request->validate([
            'size' => 'nullable|array',
            'brand' => 'nullable|array',
        ]);

        // dd($validatedData);


        // $catalog = Catalog::active()->where('slug', $slug)->with(['subcatalogs' => function ($query) {
        //     $query->withCount('products');
        // }])->first();

        // $sizes = Size::where('catalog_id', $catalog->id)->get();

        // $catalog_products = $catalog->with('products')->where("is_active", true);
        // $this->productService->filter()

        // $products = $catalog_products->paginate(10);
        // $products_total = $catalog_products->count();

        // $brends = $catalog_products->select('brend')
        //     ->whereNotNull('brend')
        //     ->distinct()
        //     ->pluck('brend');

        $product_query = Product::active();
        if ($request->has('subcatalog')) {
            $subcatalog_id = $request->get('subcatalog');
            $product_query->where('sub_catalog_id', $subcatalog_id);
        }

        if ($request->has('brand')) {
            $brand = $validatedData['brand'] ?? [];
            $product_query->whereIn('brend', $brand);
        }

        if ($request->has('size')) {
            $size = $validatedData['size'] ?? [];
            $product_query->with('sizes')->whereHas('sizes', function ($q) use ($size) {
                $q->whereIn('size', $size);
            });
        }

        $products = $product_query->paginate(10);

        // if ($request->has('subcatalog') || $request->has('brand') || $request->has('size')) {
        //     $subcatalog_id = $request->get('subcatalog');
        //     $size = $validatedData['size'];
        //     $brand = $validatedData['brand'] ?? [];


        //     $products = Product::active()->with('sizes')->whereHas('sizes', function ($q) use ($size) {
        //         $q->whereIn('size', $size);
        //     })->orWhere('sub_catalog_id', $subcatalog_id)->orWhereIn('brend', $brand)->get();

        //     dd($products);

        //     // with('order_items')->whereHas('order_items', function($q) {
        //     //     $q->where('item_status', 'Return Approved');
        //     //    })->get();
        // } else {
        //     $products = $catalog_products->paginate(10);
        // }

        return redirect()->back()->withInput()->compact('products');
    }
}
