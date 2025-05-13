<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use App\Http\Requests\Admin\ProductRequest;  
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::paginate(5);

        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        if($request->validated()) {
            $image = $request->file('image')->store(
                'product/images', 'public'
            );
            $slug = Str::slug($request->title, '-');

            Product::create($request->except('image') + ['slug' => $slug, 'image' => $image]);
        }

        return redirect()->route('admin.products.index')->with([
            'message' => 'Success Created !',
            'alert-type' => 'success'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        // $categories = Category::get(['name','id']);

        return view('admin.products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductRequest $request, Product $product)
    {
        if($request->validated()) {
            $slug = Str::slug($request->title, '-');
            if($request->image) {
                File::delete('storage/'. $product->image);
                $image = $request->file('image')->store(
                    'product/images', 'public'
                );
                $product->update($request->except('image') + ['slug' => $slug, 'image' => $image]);
            }else {
                $product->update($request->validated() + ['slug' => $slug]);
            }
        }

        return redirect()->route('admin.products.index')->with([
            'message' => 'Success Updated !',
            'alert-type' => 'info'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        File::delete('storage/'. $product->image);
        $product->delete();

        return redirect()->back()->with([
            'message' => 'Success Deleted !',
            'alert-type' => 'danger'
        ]);
    }
}
