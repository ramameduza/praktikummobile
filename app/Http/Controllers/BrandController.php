<?php
namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Brand;


class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::all();
        return view('brands.index', compact('brands'));
    }

    public function create()
    {
        return view('brands.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'product_brand' => 'required',
            'status' => 'required|string',
        ]);

        Brand::create($request->all());
        return redirect()->route('brands.index')
                         ->with('success', 'Brand berhasil dibuat.');
    }

    public function show(Brand $brands)
    {
        return view('brands.show', compact ('brands'));
    }

    public function edit(Brand $brands)
    {
        return view('brands.edit', compact('$brands'));
    }

    public function update(Request $request, Brand $brands)
    {
        $request->validate([
            'id' => 'required',
            'product_brand' => 'required',
            'status' => 'required|string',
        ]);

        $brands->update($request->all());
        return redirect()->route('brands.index')
                         ->with('success', 'Brand berhasil diperbarui.');
    }

    public function destroy(Brand $brands)
    {
        $brands->delete();
        return redirect()->route('brand.index')
                         ->with('success', 'Brand berhasil dihapus.');
    }
}