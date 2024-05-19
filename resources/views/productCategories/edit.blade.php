@extends('layout.app')

@section('content')
<div class="container mt-5">
    <h1>Edit Kategori Produk</h1>
    <form action="{{ route('productCategories.update', $cat->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="id">Id:</label>
            <input type="text" name="id" value="{{ $cat->id }}" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="product_category_name">Nama Kategori Produk:</label>
            <input type="text" name="product_category_name" value="{{ $cat->product_category_name }}" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="status">Status:</label>
            <input type="text" name="status" value="{{ $cat->status }}" class="form-control" required>
        </div>
    </form>
</div>
@endsection