@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1>Daftar Produk</h1>
    <a href="{{ route('products.create') }}" class="btn btn-primary mb-3">Tambah Produk</a>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered">
        <tr>
            <th>SKU</th>
            <th>Kategori</th>
            <th>Nama</th>
            <th>Detail</th>
            <th>Brand</th>
            <th>Harga</th>
            <th>Gambar</th>
            <th>Status</th>
            <th>Slug</th>
            <th width="280px">Aksi</th>
        </tr>
        @foreach ($products as $product)
            <tr>
                <td>{{ $product->sku }}</td>
                <td>{{ $product->product_category }}</td>
                <td>{{ $product->product_name }}</td>
                <td>{{ $product->product_detail }}</td>
                <td>{{ $product->product_brand }}</td>
                <td>{{ $product->product_price }}</td>
                <td>{{ $product->fileimages }}</td>
                <td>{{ $product->status }}</td>
                <td>{{ $product->slug }}</td>
                <td>
                    <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Lihat</a>
                        <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</div>
@endsection