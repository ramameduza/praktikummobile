<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\ProductCategory;


class ProductCategoryController extends Controller
{
    public function index()
    {
        $productCategories = ProductCategory::all();
        return view('productCategories.index', compact('productCategories'));
    }

    public function create()
    {
        return view('productCategories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'product_category_name' => 'required',
            'status' => 'required|string',
        ]);

        ProductCategory::create($request->all());
        return redirect()->route('productCategories.index')
                         ->with('success', 'Kategori Produk berhasil dibuat.');
    }

    public function show(ProductCategory $productCategories)
    {
        return view('productCategories.show', compact ('productCategories'));
    }

    public function edit(ProductCategory $productCategories)
    {
        return view('productCategories.edit', compact('$productCategories'));
    }

    public function update(Request $request, ProductCategory $productCategories)
    {
        $request->validate([
            'id' => 'required',
            'product_category_name' => 'required',
            'status' => 'required|string',
        ]);

        $productCategories->update($request->all());
        return redirect()->route('productCategories.index')
                         ->with('success', 'Kategori Produk berhasil diperbarui.');
    }

    public function destroy(ProductCategory $productCategories)
    {
        $productCategories->delete();
        return redirect()->route('productCategories.index')
                         ->with('success', 'Kategori Produk berhasil dihapus.');
    }
}