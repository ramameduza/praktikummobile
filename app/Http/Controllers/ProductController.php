<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Product;


class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        dd($products);
        return view('products', compact('products'));
    }

    public function create():View
    {
        return view('products.create');
    }

    public function store(Request $request):RedirectResponse
    {
        $request->validate([
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

    public function show(Product $product):View
    {
        return view('products.show')-> with('product');
    }

    public function edit(Product $product):View
    {
        return view('products.edit')-> with('product');
    }

    public function update(Request $request, Product $product):RedirectResponse
    {
        $request->validate([
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

    public function destroy(Product $product):RedirectResponse
    {
        $product->delete();
        return redirect()->route('products.index')
                         ->with('success', 'Produk berhasil dihapus.');
    }
}