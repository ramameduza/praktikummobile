@extends('layout.app')

@section('content')
<div class="container mt-5">
    <h1>Tambah Produk Baru</h1>
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="id">Id:</label>
            <input type="text" name="id" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="sku">SKU:</label>
            <input type="text" name="sku" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="product_category">Kategori Produk:</label>
            <input type="number" name="product_category" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="product_name">Nama Produk:</label>
            <textarea name="product_name" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <label for="product_detail">Detail Produk:</label>
            <textarea name="product_detail" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <label for="product_brand">Brand Produk:</label>
            <input type="number" name="product_brand" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="product_price">Harga Produk:</label>
            <input type="number" name="product_price" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="fileimages">Gambar Produk:</label>
            <input type="text" name="fileimages" class="form-control">
        </div>
        <div class="form-group">
            <label for="status">Status:</label>
            <input type="text" name="status" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="slug">Slug:</label>
            <input type="text" name="slug" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Simpan</button>
    </form>
</div>
@endsection
