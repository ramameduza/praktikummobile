@extends('layout.app')

@section('content')
<div class="container mt-5">
    <h1>Tambah Kategori Produk Baru</h1>
    <form action="{{ route('productCategories.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="id">Id:</label>
            <input type="text" name="id" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="product_category_name">Nama Kategori Produk:</label>
            <input type="text" name="product_category_name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="status">Status:</label>
            <input type="text" name="status" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Simpan</button>
    </form>
</div>
@endsection
