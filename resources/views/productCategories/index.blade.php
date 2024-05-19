@extends('layout.app')

@section('content')
<div class="container mt-5">
    <h1>Daftar Kategori Produk</h1>
    <a href="{{ route('productCategories.create') }}" class="btn btn-primary mb-3">Tambah Kategori Produk</a>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered">
        <tr>
            <th>Id</th>
            <th>Nama Kategori</th>
            <th>Status</th>
            <th width="280px">Aksi</th>
        </tr>
        @foreach ($productCategories as $cat)
            <tr>
                <td>{{ $cat->id }}</td>
                <td>{{ $cat->product_category_name }}</td>
                <td>{{ $cat->status }}</td>
                <td>
                    <form action="{{ route('productCategories.destroy',$cat->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('productCategories.show',$cat->id) }}">Lihat</a>
                        <a class="btn btn-primary" href="{{ route('productCategories.edit',$cat->id) }}">Edit</a>
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