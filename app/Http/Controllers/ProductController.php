<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Product;


class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'sku' => 'required',
            'product_category' => 'required|integer',
            'product_name' => 'required',
            'product_detail' => 'required',
            'product_brand' => 'required|integer',
            'product_price' => 'required|integer',
            'fileimages' => 'nullable|string',
            'status' => 'required|string',
            'slug' => 'required|string',
        ]);

        Product::create($request->all());
        return redirect()->route('products.index')
                         ->with('success', 'Produk berhasil dibuat.');
    }

    public function show(Product $product)
    {
        return view('products.show', compact ('product'));
    }

    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'id' => 'required',
            'sku' => 'required',
            'product_category' => 'required|integer',
            'product_name' => 'required',
            'product_detail' => 'required',
            'product_brand' => 'required|integer',
            'product_price' => 'required|integer',
            'fileimages' => 'nullable|string',
            'status' => 'required|string',
            'slug' => 'required|string',
        ]);

        $product->update($request->all());
        return redirect()->route('products.index')
                         ->with('success', 'Produk berhasil diperbarui.');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')
                         ->with('success', 'Produk berhasil dihapus.');
    }
}