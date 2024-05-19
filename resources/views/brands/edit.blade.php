@extends('layout.app')

@section('content')
<div class="container mt-5">
    <h1>Edit Brand</h1>
    <form action="{{ route('brands.update', $brand->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="id">Id:</label>
            <input type="text" name="id" value="{{ $brand->id }}" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="product_brand">Nama Brand:</label>
            <input type="text" name="product_brand" value="{{ $brand->product_brand }}" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="status">Status:</label>
            <input type="text" name="status" value="{{ $brand->status }}" class="form-control" required>
        </div>
    </form>
</div>
@endsection