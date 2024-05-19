@extends('layout.app')

@section('content')
<div class="container mt-5">
    <h1>Edit Produk</h1>
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="id">Id:</label>
            <input type="text" name="id" value="{{ $product->id }}" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="sku">SKU:</label>
            <input type="text" name="sku" value="{{ $product->sku }}" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="product_category">Kategori Produk:</label>
            <input type="number" name="product_category" value="{{ $product->product_category }}" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="product_name">Nama Produk:</label>
            <textarea name="product_name" class="form-control" required>{{ $product->product_name }}</textarea>
        </div>
        <div class="form-group">
            <label for="product_detail">Detail Produk:</label>
            <textarea name="product_detail" class="form-control" required>{{ $product->product_detail }}</textarea>
        </div>
        <div class="form-group">
            <label for="product_brand">Brand Produk:</label>
            <input type="number" name="product_brand" value="{{ $product->product_brand }}" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="product_price">Harga Produk:</label>
            <input type="number" name="product_price" value="{{ $product->product_price }}" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="fileimages">Gambar Produk:</label>
            <input type="text" name="fileimages" value="{{ $product->fileimages }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="status">Status:</label>
            <input type="text" name="status" value="{{ $product->status }}" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="slug">Slug:</label>
            <input type="text" name="slug" value="{{ $product->slug }}" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Simpan</button>
    </form>
</div>
@endsection